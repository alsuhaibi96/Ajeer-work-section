<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\callToAction;

class CallToActionController extends Controller
{
    //get the call to action elements

    function index(){
        $callToAction=callToAction::select('title','description','button_label')->get();
        return view('index',compact('callToAction'));
    }
}

