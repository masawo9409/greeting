<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class greetApp extends Controller
{
    public function greetTime($time)
    {
        switch($time){
        case 'morning':
            return view('message.time',['time1'=>'朝','time_kanji'=>'おはようございます']);
            break;
        case 'afternoon':
            return view('message.time',['time1'=>'昼','time_kanji'=>'こんにちは']);
            break;
        case 'evening':
            return view('message.time',['time1'=>'夕方','time_kanji'=>'こんばんは']);
            break;
        case  'night':
            return view('message.time',['time1'=>'夜','time_kanji'=>'おやすみ']);
            break;
        default;
        }
    }

    public function freeword($variable)
    {
        return view('message.freeword',['variable'=>$variable]);
    }

    public function randam()
    {
        $randam_message=array("おはよう","こんにちは","こんばんは","おやすみ");
        $randam_keys = array_rand($randam_message,1);
        // $random = $randam_message[$random_keys[0]];
        // $random = srand($random);
        $randam=$randam_message[$randam_keys];
        return view('message.randam',['msg'=>$randam]);
        
    }



}
