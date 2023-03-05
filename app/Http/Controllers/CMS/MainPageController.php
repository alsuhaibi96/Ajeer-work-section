<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//include models
use App\Models\HeroSection;
use App\Models\ServicesImages;
use App\Models\ServicesText;
use App\Models\PreparationSection;
use App\Models\pricingPackages;
use App\Models\callToAction;
use App\Models\footerAbout;
use App\Models\footerAddress;
use App\Models\footerPolicy;
use App\Models\footerServices;

use function PHPUnit\Framework\isNull;

class MainPageController extends Controller
{
    //get the content from the db  elements
    function index(){
        //return the hero section to the view
        $heroSection=HeroSection::select('title','description','call_now_label','know_more_label','hero_img')->first();

        //return the services texts and images to the view
        $serviceTexts=ServicesText::select('title','sub_title','description')->first();
        $serviceImages=ServicesImages::select('service_img','service_label')->get();
//  if($serviceImages.)
//  return count($serviceImages;

        return view('index',compact('heroSection','serviceTexts','serviceImages'));
    }
}
