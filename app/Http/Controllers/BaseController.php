<?php
/**
 * Created by PhpStorm.
 * User: vladino
 * Date: 25.08.18
 * Time: 12:36
 */

namespace App\Http\Controllers;


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

}