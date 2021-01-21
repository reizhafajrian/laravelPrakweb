<?php

namespace App\Http\Controllers;

use App\Tiket;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanTiketController extends Controller
{
    public function index($id){
        $tiket=new Tiket();

        $data=$tiket->find($id);
        $email=Auth::user()->email;
        $name=Auth::user()->name;
        if($data != null){
            \Midtrans\Config::$serverKey="SB-Mid-server-TqPfmnCEiR4EXMDnSP71mjaV";
            \Midtrans\Config::$isProduction=false;
            $transaction_details = array(
                'order_id' => rand(),
                'gross_amount' => 94000, // no decimal allowed for creditcard
            );
            $item_details = array (
                array(
                    'id' => 'a1',
                    'price' => 94000,
                    'quantity' => 1,
                    'name' => "Apple"
                ),
              );
            // Optional
            $customer_details = array(
                'first_name'    => $name,
                'last_name'     => "",
                'email'         => $email,
                'phone'         => ""
            
            );
            // Fill transaction details
            $transaction = array(
                'transaction_details' => $transaction_details,
                'customer_details' => $customer_details,
                'item_details' => $item_details,
            );
            
            $snapToken = \Midtrans\Snap::getSnapToken($transaction);
            $order=$transaction_details['order_id'];
            return view("redirect",compact("snapToken","order"));
        
        }
    }
 
}
