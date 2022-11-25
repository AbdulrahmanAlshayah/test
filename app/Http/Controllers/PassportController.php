<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function index(){
        Passport::create([
            'name'=>'mohammad',
            'number'=>2,
            'release'=>'hit',
            'expiration'=>'ree',
            'cerification_code','313124',
            'arrival'=> 'sdf    ',
            'visa_type'=>'4234',
            'passport_image'=>'https://dummyimage.com/640x360/fff/aaa',
            'photograph'=>'https://www.fillmurray.com/640/360',
            'job'=>'hhtosdfioj'
        ]);
        $passports = Passport::all();
        // $user = $passports->user()->get();
        return view('pages.home',compact('passports'));
    }
}
