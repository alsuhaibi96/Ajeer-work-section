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


         //return the prepration section to the view
         $preperationSection=PreparationSection::select('title','sub_title','description','main_img','sub_img_one','sub_img_two','sub_img_three')->first();


         //return packages and prices to the view
         $packagesSection=pricingPackages::select('title','price','currency','period','feature_one','feature_two','feature_three','feature_four','feature_five','feature_six','subscribe_label')->get();

         //return call to action section to the view
        $callToActionSection=callToAction::select('title','description','button_label')->first();



         return view('index',compact('heroSection','serviceTexts','serviceImages','preperationSection','packagesSection','callToActionSection'));
    }
}
