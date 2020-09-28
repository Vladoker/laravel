<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Agreement;
use PayPal\Api\Payer;
use PayPal\Api\Plan;
use PayPal\Api\PaymentDefinition;
use PayPal\Api\PayerInfo;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Exception\PayPalConnectionException;
use Redirect;


class PaymentController extends Controller
{
    public function __construct()
    {
         /** PayPal api context **/
         $paypal_conf = Config::get('paypal');
         $this->_api_context = new ApiContext(new OAuthTokenCredential(
             $paypal_conf['client_id'],
             $paypal_conf['secret'])
         );
         $this->_api_context->setConfig($paypal_conf['settings']);
    }  

    public function payWithpaypal(Request $request)
    {
      if($request->count <= 0) {
         return redirect()->route('home');
      }

      $prod = Product::where('slug', $request->slug)->firstOrFail();

      $amountToBePaid = $prod->price * $request->count;
      $payer = new Payer();
      $payer->setPaymentMethod('paypal');
  
      $item_1 = new Item();
      $item_1->setName($prod->title) /** название элемента **/
              ->setCurrency('RUB')
              ->setQuantity($request->count)
              ->setPrice($prod->price); /** цена **/

      $item_list = new ItemList();
      $item_list->setItems(array($item_1));
  
      $amount = new Amount();
      $amount->setCurrency('RUB')
             ->setTotal($amountToBePaid);
                            
      $redirect_urls = new RedirectUrls();
      /** Укажите обратный URL **/
      $redirect_urls->setReturnUrl(URL::route('status'))
                ->setCancelUrl(URL::route('status'));
         
      $transaction = new Transaction();
      $transaction->setAmount($amount)
              ->setItemList($item_list)
              ->setDescription($prod->desc);   //'Описание транзакции'
      
      $payment = new Payment();
      $payment->setIntent('Sale')
              ->setPayer($payer)
              ->setRedirectUrls($redirect_urls)
              ->setTransactions(array($transaction));
              
      try {
         $payment->create($this->_api_context);
      } catch (PayPalConnectionException $ex) {
                
           if (Config::get('app.debug')) {
              session()->put('error', 'Таймаут соединения');
              return redirect()->route('home');
           } else {
              session()->put('error', 'Возникла ошибка, извините за неудобство');
              return redirect()->route('home');
           }
      }
     
      
      foreach ($payment->getLinks() as $link) {
        if ($link->getRel() == 'approval_url') {
           $redirect_url = $link->getHref();
           break;
        }
      }
      
      /** добавляем ID платежа в сессию **/
      session()->put('paypal_payment_id', $payment->getId());
      if (isset($redirect_url)) {
         /** редиректим в paypal **/
         return redirect()->away($redirect_url);
      }
      session()->put('error', 'Произошла неизвестная ошибка');
      return redirect()->route('home');
    }
    public function getPaymentStatus(Request $request)
    {
      /** Получаем ID платежа до очистки сессии **/
      $payment_id = session()->get('paypal_payment_id');
      /** Очищаем ID платежа **/
      session()->forget('paypal_payment_id');      
      
      if (empty($request->PayerID) || empty($request->token)) {
         session()->flash('error', 'Payment failed');
         return redirect()->route('home');
      }      
      
      $payment = Payment::get($payment_id, $this->_api_context);
      $execution = new PaymentExecution();
      $execution->setPayerId($request->PayerID);      
      
      /** Выполняем платёж **/
      $result = $payment->execute($execution, $this->_api_context);
      
      if ($result->getState() == 'approved') {
         session()->flash('success', 'Платеж прошел успешно');
         dd('Платеж прошел успешно');
         return redirect()->route('home');
      }      
      
      session()->flash('error', 'Платеж не прошел');
      dd('Платеж не прошел');
      return redirect()->route('home');    
    }
}
