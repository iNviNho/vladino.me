<?php
/**
 * Created by PhpStorm.
 * User: vladino
 * Date: 25.08.18
 * Time: 12:36
 */

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{

    public function __construct()
    {
        View::share("version", "4");
        View::share("locales", [
            "sk" => "SK",
            "en" => "EN"
        ]);
    }

    public function home() {

        $myBirthday = Carbon::createFromDate(1993, 5, 19);
        $now = Carbon::now();

        $interval = $now->diff($myBirthday);

        return view("base.home", [
            "interval" => $interval
        ]);
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

        return redirect(route("contactthankyou", ["locale" => App::getLocale()]));
    }

}