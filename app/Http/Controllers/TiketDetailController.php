<?php

namespace App\Http\Controllers;

use App\Tiket;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TiketDetailController extends Controller
{
    public function index($id)
    {
        // dd($id);
        $tiket = new Tiket();
        $data = $tiket->find($id);
        $user=Auth::check();
        if ($user ==true) {
            $email = Auth::user()->email;
            $name = Auth::user()->name;
            if ($data != null) {
                \Midtrans\Config::$serverKey = "SB-Mid-server-TqPfmnCEiR4EXMDnSP71mjaV";
                \Midtrans\Config::$isProduction = false;
                $transaction_details = array(
                    'order_id' => rand(),
                    'gross_amount' => $data->harga, // no decimal allowed for creditcard
                );
                $item_details = array(
                    array(
                        'id' => $data->_id,
                        'price' => $data->harga,
                        'quantity' => 1,
                        'name' => "$data->nama"
                    ),
                );
                // Optional
                $customer_details = array(
                    'first_name'    => "$name",
                    'last_name'     => "",
                    'email'         => "$email",
                    'phone'         => ""

                );
                // Fill transaction details
                $transaction = array(
                    'transaction_details' => $transaction_details,
                    'customer_details' => $customer_details,
                    'item_details' => $item_details,
                );
                $snapToken = \Midtrans\Snap::getSnapToken($transaction);
                $order = $transaction_details["order_id"];
                return view("tiketdetail/tiketdetail", compact("data", "email", "snapToken", "order"));
            } else {
                return abort(404);
            }
        }else{
           return redirect("/login");
        }
    }
    public function Cancel(Request $request)
    {


        \Midtrans\Config::$serverKey = "SB-Mid-server-TqPfmnCEiR4EXMDnSP71mjaV";
        $status = \Midtrans\Transaction::status($request->order_id);
        if ($status->transaction_status == "pending") {
            \Midtrans\Transaction::cancel($request->order_id);
        } else if ($status->transaction_status == "settlement") {
            $sendemail = new EmailController();
            $sendemail->sendEmail($request->email);
        }
    }
}
