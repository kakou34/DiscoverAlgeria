<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Email;
use App\Food;
use App\Hero;
use App\Question;
use App\SliderPicture;
use Illuminate\Http\Request;


use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{


    //loading the home page with necessary data
    public function loadPage () {
        $response = Curl::to('http://api.openweathermap.org/data/2.5/weather?q=algiers&appid=819aad06e33148c3847be880216e34df')->get();
        $data = json_decode($response, true);


        $food = Food::all()->random();
        $hero = Hero::all()->random();
        $destination = Destination::all()->random();
        $question = Question::all()->random();
        $photos = SliderPicture::all()->random(10);

        $index = 1;

        //dd($data);
        return view('welcome', [
            'weather' => $data,
            'food'=> $food,
            'hero'=> $hero,
            'destination' => $destination,
            'pics' => $photos,
            'question' => $question,
            'index'=>$index
        ]);
    }

    public function storeMail () {
            $data = request()->validate ([
                'email'=>'required'
            ]);

            $email = new Email();
            $email->email = request('email');
            $email->save();
            return back();
    }

}



