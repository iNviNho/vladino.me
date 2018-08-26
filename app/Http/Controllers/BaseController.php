<?php
/**
 * Created by PhpStorm.
 * User: vladino
 * Date: 25.08.18
 * Time: 12:36
 */

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class BaseController extends Controller
{

    public function home() {
        return view("base.home");
    }

    public function resume() {
        return view("base.resume");
    }

    public function contact() {
        return view("base.contact");
    }

    public function contactThankYou() {
        return view("base.contactThankYou");
    }

    public function contactSubmit(Request $request) {

        Mail::raw(json_encode($request->all(), JSON_PRETTY_PRINT), function ($message) {
            $message->to('vladino.vrab@gmail.com');
            $message->subject('Contact form submit on vladino.me');
        });

        return redirect("/" . App::getLocale() . "/contact/thankyou");
    }

}