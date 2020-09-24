<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalPaymentController extends Controller
{
    public function handlePayment()
    {
        $product = [];
        $product['items'] = [
            [
                'name' => 'Nike Joyride 2',
                'price' => 112,
                'desc'  => 'Running shoes for Men',
                'currency' => 'RUB',
                'qty' => 2
            ]
        ];
  
        $product['invoice_id'] = 2;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = 224;
  
        session()->put('data', $product);

        $paypalModule = new ExpressCheckout;
  
        $res = $paypalModule->setExpressCheckout($product, true);
  
        return redirect($res['paypal_link']);
    }
   
    public function paymentCancel()
    {
        dd('Платёж не прошёл');
    }
  
    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $paypalModule->doExpressCheckoutPayment(session()->get('data'), $request->token, $request->PayerID);
            session()->forget('data');
            dd('Платёж прошёл');
        }
    }
}
