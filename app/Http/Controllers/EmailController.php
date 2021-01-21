<?php

namespace App\Http\Controllers;

use App\Mail\SettlementMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\String_;
use Psy\Util\Json;

class EmailController extends Controller
{
    public function sendEmail($email){
        $details=[
            "title" => "Mail from TicketIn",
            "body" => "this is testing email using laravel"
        ];
        Mail::to($email)->send(new SettlementMail($details));
        return response(200);
    }
}
