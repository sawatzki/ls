<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLang($lang){
        if (array_key_exists($lang, config('languages'))){
            session()->put('applocale', $lang);
        }

//        session(['key' => 'value 123']);
        echo "SESS: " . session('applocale');


        return redirect()->back();
        dd(session());
    }
}
