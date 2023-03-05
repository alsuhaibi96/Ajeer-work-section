<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;
class HeroSectionController extends Controller
{
    //get the hero section elements
    function index(){
        $heroSection=HeroSection::select('title','description','call_now_label','know_more_label','hero_img')->first();

//   return $heroSection;
        return view('index',compact('heroSection'));
    }

}
