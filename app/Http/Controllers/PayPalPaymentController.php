<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalPaymentController extends Controller
{
    public function handlePayment(Request $request)
    {
    
        if($request->count < 0) {
            return redirect()->route('home');
        }

        $prod = Product::where('slug', $request->slug)->firstOrFail();

       

        $product = [];
        $product['items'] = [
            [
                'name' => $prod->title,
                'price' => $prod->price,
                'desc'  => mb_strimwidth($prod->title, 0, 120, '...'),
                'currency' => 'RUB',
                'qty' => $request->count
            ]
        ];
  
        $product['invoice_id'] = date("Ymdhis");
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = $prod->price * $request->count;

        session()->put('data', $product);

        $paypalModule = new ExpressCheckout;
        $res = $paypalModule->setExpressCheckout($product);

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
