<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesImages;
use App\Models\ServicesText;


class ServicesController extends Controller
{
    //get the hero section elements
    function index(){
        $serviceTexts=ServicesText::select('title','sub_title','description')->first();
//   return $serviceTexts;
        return view('index',compact('serviceTexts'));
    }
}
