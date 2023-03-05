@extends('layouts.master')
@section('title','خدمات قطاع الاعمال')
@section('work-services')
active
@stop


@section('content')

   <!--Hero Section-->


   <section id="heroSection" class="position-relative pb-5"  >

  {{-- the nav    --}}
@section('body-header')
@include('partials.navbar')
@show
@if(isset($heroSection))


<div class="work-section-container mt-5 text-white mx-4 row " >
  <div class="right-content-container col-12 col-lg-6 col-md-12">
      <h1 class="work-services-title fw-bold ">

{{$heroSection->title}}

      </h1>
      <p class="services-description mt-3 mb-3 fs-6 " >
        {!! $heroSection->description!!}</p>


      <div class="action-buttons-contaienr d-flex  mt-5 col-12 col-lg-6 col-md-6 col-sm-6 bg-md-danger justify-content-between ">
      <a class="regular-btn bg-secondary-color" href="tel:00967775474720">{{$heroSection->call_now_label}} </a>
      <a class="regular-btn border-1-px mx-4" href="https://www.iajeer.com">  {{$heroSection->know_more_label}}</a>
      </div>

  </div>



<div class="hero-image-container   col-12 mt-5 mt-lg-0 ">
  <img class="hero-section-image" src="{{asset('storage/'.$heroSection->hero_img)}}" alt="hero Image" >
      </div>
</div>
{{-- @empty($heroSection) --}}
@else
<div class="alert alert-danger">
    يجب عليك اضافة البيانات والصورة من لوحة التحكم
  </div>

  @endif



</section>

  <!--End of Hero Section-->

<!--
Start of Services  We Offer Section
-->

<section>
<div class="services-we-offer p-0 bg-container-color  " >
  <div class="services-inner-container  col-11 float-start bg-white pt-4 " >

      <div class="col-11 m-auto  ">
          <!--Cards spacer-->
          <div class="pt-lg-5 mt-lg-5"></div>
          <!--Row !-->
          <div class="row">
        <div class="row p-0 m-0">

            @if(isset($serviceTexts))
          <div class="col-12 col-lg-6 mb-3  " >
              <h2 class="fw-bold">   {{$serviceTexts->title}} </h2>
<h3 class="services-sub-title mt-4 fw-light"> {{$serviceTexts->sub_title}}</h3>
<p class="services-we-offer-description   fw-lighter description-color ">
    {!! $serviceTexts->description !!}
</p>
          </div>
          @else
          <div class="alert alert-danger">
            يجب عليك اضافة بيانات الخدمات  من لوحة التحكم
          </div>
          @endif


          @if(!$serviceImages->isEmpty())
          <div class="col-6  col-lg-3 d-flex flex-column p-0" >
              <div class=" p-4   text-center card-size  card-bg-color  pb-5 ">
                 <div class="d-flex justify-content-center mt-lg-3 mb-3 ">
                     <img class="" src="{{asset('storage/'.$serviceImages[0]->service_img)}}" width="50" alt="Twenty Four Hour Of Work">
                 </div>
                      <span class="fw-bolder mt-5" >{{$serviceImages[0]->service_label}}</span>
              </div>


                     </div>

                     <div class="col-6 col-lg-3 d-flex flex-column p-0 ">
                         <div class=" p-4   text-center card-size bg-white  pb-5">
                             <div class="d-flex justify-content-center mt-lg-3 mb-3 ">
                                 <img class="" src="{{asset('storage/'.$serviceImages[1]->service_img)}}" width="50" alt="Maintainance">
                             </div>
                                  <span class="fw-bolder mt-3" > {{$serviceImages[1]->service_label}}</span>
                          </div>

                       </div>
        </div>
        <div class="row p-0 m-0 mt-lg-1">
          <div class="col-6 col-lg-3 d-flex flex-column p-0 " >
              <div class=" p-4 px-5  text-center card-size  bg-white  pb-5">
                 <div class="d-flex justify-content-center mt-lg-3 mb-3">
                     <img class="" src="{{asset('storage/'.$serviceImages[2]->service_img)}}" width="50" alt="More">
                 </div>
                      <span class="fw-bolder mt-3  " >{{$serviceImages[2]->service_label}} </span>
              </div>


                     </div>

                     <div class="col-6 p-0 col-lg-3  ">
                         <div class="mx-lg-2 p-4   text-center card-size card-bg-color  pb-5">
                             <div class="d-flex justify-content-center mt-lg-3 mb-3">
                                 <img class="" src="{{asset('storage/'.$serviceImages[3]->service_img)}}" width="50" alt="Solutions">
                             </div>
                                  <span class="fw-bolder mt-3"  >{{$serviceImages[3]->service_label}}</span>
                          </div>

                       </div>


                       <div class="col-6 p-0 col-lg-3  ">
                          <div class="less-cost-card p-4   text-center card-size bg-white  pb-5 ">
                              <div class="d-flex justify-content-center mt-lg-3 mb-3">
                                  <img class="" src="{{asset('storage/'.$serviceImages[4]->service_img)}}" width="50" alt="Payment">
                              </div>
                                   <span class="fw-bolder mt-3 " > {{$serviceImages[4]->service_label}}</span>
                           </div>

                        </div>


                        <div class="col-6 p-0 col-lg-3 ">
                          <div class="fast-respond-card p-4   text-center card-size card-bg-color  pb-5  ">
                              <div class="d-flex justify-content-center mt-lg-3 mb-3">
                                  <img class="" src="{{asset('storage/'.$serviceImages[5]->service_img)}}" width="50" alt="Fast Response">
                              </div>
                                   <span class="fw-bolder mt-3 " > {{$serviceImages[5]->service_label}}</span>
                           </div>

                        </div>
        </div>
        @if($serviceImages->count() >6)
        <div class="alert alert-danger">
            يجب عليك اضافة 6  صور للخدمات فقط من لوحة التحكم
          </div>

          @endif

             @else
        <div class="alert alert-danger">
          يجب عليك اضافة صور الخدمات  من لوحة التحكم
        </div>
@endif
          </div>


      </div>


  </div>

</div>
</section>

<!--
End of Services  We Offer Section
-->

<!--Preperations and Reviews-->

<section>
  <div class="prepare-and-reviews  bg-white pt-5">
      <div class="col-11 col-lg-6  m-auto d-flex flex-column text-center pt-3">
          <h4 class="fw-bold fs-2">    تجهيز وتنظيم</h4>
          <h5 class="preparation-title mt-1 fw-light fs-5"> خدمات مختلفة </h5>
          <p class="preparation-description    description-color mt-3 fs-6">
             يوجد 5000 + تقييمات حيث أن عملائنا يثقون بجودة خدماتنا وتميزها.
             <br>
             جودة عمل واستمرار في تقديم حلول مختلفة وحديثة.

          </p>

          <img class="mt-5 fix-lamp-image img-fluid" src="../assets/images/backlight-adjustment-man-with-screwdriver-hanging-wall-twisting-adjusting-lighting.jpg" alt="Fix House Services">


          <div class="thumbnails-container row mt-5 col-12 m-auto">
<img class="col-5 col-lg-3  m-auto  img-thumbnail review-image-width" src="../assets/images/electrician-is-mounting-electric-sockets-white-wall-indoors.jpg" alt="Electronics Service">
<img class="col-5  col-lg-3 m-auto  mx-1 mx-lg-2 img-thumbnail review-image-width" src="../assets/images/part-male-construction-worker.jpg" alt="Constr uctionService">
<img class="col-6  col-lg-3 m-auto  mt-2 img-thumbnail review-image-width" src="../assets/images/cheerful-asian-male-janitor-walking-into-hotel-room-carrying-supplies-bucket.jpg" alt="Janitor Service">

          </div>

      </div>

  </div>
</section>

<!--End  Preperations and Reviews-->

<div class="spacer pt-5 bg-white"></div>



<!--Packages Price List-->

<div id="generic_price_table" class="text-black-50 bg-white pt-5 pb-5" >
<section>
      <div class="container ">
          <div class="row">
              <div class="col-md-12">
                  <!--PRICE HEADING START-->
                  <div class="price-heading clearfix mt-2">
                      <h1> باقات الاشتراك </h1>
                  </div>
                  <!--//PRICE HEADING END-->
              </div>
          </div>
      </div>
      <div class="container">

          <!--BLOCK ROW START-->
          <div class="row">
              <div class="col-md-4">

                  <!--PRICE CONTENT START-->
                  <div class="generic_content clearfix card-border-1-px " >

                      <!--HEAD PRICE DETAIL START-->
                      <div class="generic_head_price clearfix " >

                          <!--HEAD CONTENT START-->
                          <div class="generic_head_content clearfix">

                              <!--HEAD START-->
                              <div class="head_bg"></div>
                              <div class="head">
                                  <span class="text-black">الخطة الاساسية</span>
                              </div>
                              <!--//HEAD END-->

                          </div>
                          <!--//HEAD CONTENT END-->

                          <!--PRICE START-->
                          <div class="generic_price_tag clearfix">
                              <span class="price">
                                  <span class="sign">ريال</span>
                                  <span class="currency">1115</span>
                                  <span class="cent"></span>
                                  <span class="month">/سنويا</span>
                              </span>
                          </div>
                          <!--//PRICE END-->

                      </div>
                      <!--//HEAD PRICE DETAIL END-->

                      <!--FEATURE LIST START-->
                      <div class="generic_feature_list">
                          <ul>
                              <li><span>الدخول</span>  على منصة الأعمال لإدارة العمليات</li>
                              <li><span>5</span> فروع</li>
                              <li><span>توفير</span>  أفضل الفنيين المدربين</li>
                              <li><span>30</span> يوم من ضمان الخدمة </li>
                              <li><span>1</span> مستخدم للنظام</li>
                          </ul>
                      </div>
                      <!--//FEATURE LIST END-->

                      <!--BUTTON START-->
                      <div class="generic_price_btn clearfix">
                          <a class="" href="">اشتراك </a>
                      </div>
                      <!--//BUTTON END-->

                  </div>
                  <!--//PRICE CONTENT END-->

              </div>

              <div class="col-md-4">

                  <!--PRICE CONTENT START-->
                  <div class="generic_content active clearfix card-border-1-px"  >

                      <!--HEAD PRICE DETAIL START-->
                      <div class="generic_head_price clearfix" >

                          <!--HEAD CONTENT START-->
                          <div class="generic_head_content clearfix" >

                              <!--HEAD START-->
                              <div class="head_bg" ></div>
                              <div class="head" >
                                  <span class="text-black " >خطـة النخبـة</span>
                              </div>
                              <!--//HEAD END-->

                          </div>
                          <!--//HEAD CONTENT END-->

                          <!--PRICE START-->
                          <div class="generic_price_tag clearfix">
                              <span class="price">
                                  <span class="sign">ريال</span>
                                  <span class="currency">6690</span>
                                  <span class="cent"></span>
                                  <span class="month">/سنوياََ</span>
                              </span>
                          </div>
                          <!--//PRICE END-->

                      </div>
                      <!--//HEAD PRICE DETAIL END-->

                      <!--FEATURE LIST START-->
                      <div class="generic_feature_list">
                          <ul>
                              <li><span></span> </li>

                              <li><span>جميع</span>  ما تشمله الخطـة الأساسيـة</li>
                              <li><span>توفير</span>  مدير علاقة لإدارة الحساب</li>
                              <li><span>10</span> فروع </li>
                              <li><span>3</span> مستخدمين</li>
                              <li><span></span> </li>

                          </ul>
                      </div>
                      <!--//FEATURE LIST END-->

                      <!--BUTTON START-->
                      <div class="generic_price_btn clearfix">
                          <a class="" href="">اشترك </a>
                      </div>
                      <!--//BUTTON END-->

                  </div>
                  <!--//PRICE CONTENT END-->

              </div>
              <div class="col-md-4">

                  <!--PRICE CONTENT START-->
                  <div class="generic_content clearfix card-border-1-px">

                      <!--HEAD PRICE DETAIL START-->
                      <div class="generic_head_price clearfix">

                          <!--HEAD CONTENT START-->
                          <div class="generic_head_content clearfix">

                              <!--HEAD START-->
                              <div class="head_bg"></div>
                              <div class="head">
                                  <span class="text-black ">الخطة الماسية</span>
                              </div>
                              <!--//HEAD END-->

                          </div>
                          <!--//HEAD CONTENT END-->

                          <!--PRICE START-->
                          <div class="generic_price_tag clearfix">
                              <span class="price">
                                  <span class="sign">ريال</span>
                                  <span class="currency">11.150</span>
                                  <span class="cent"></span>
                                  <span class="month">/سنويا</span>
                              </span>
                          </div>
                          <!--//PRICE END-->

                      </div>
                      <!--//HEAD PRICE DETAIL END-->

                      <!--FEATURE LIST START-->
                      <div class="generic_feature_list">
                          <ul>
                              <li><span>جميع</span>  ما تشمله باقة النخبة</li>
                              <li><span>عدد</span>  لا محدود من المستخدمين الفرعيين</li>
                              <li><span>عدد</span>  لا محدود من الفروع</li>
                              <li><span>ميزة</span>  سير الموافقات الآلية </li>
                              <li><span>تقارير </span> تقارير شهرية وتسعيرات مجانية</li>
                          </ul>
                      </div>
                      <!--//FEATURE LIST END-->

                      <!--BUTTON START-->
                      <div class="generic_price_btn clearfix">
                          <a class="" href="">اشتراك </a>
                      </div>
                      <!--//BUTTON END-->

                  </div>
                  <!--//PRICE CONTENT END-->

              </div>
          </div>
          <!--//BLOCK ROW END-->

      </div>
  </section>

</div>
<!--End of Packages Price List-->


<!--Start of the call to Action Button-->
@if(isset($callToAction))
@foreach ( $callToAction as $item )

<section>
  <div class="prepare-and-reviews  bg-white pt-5 pb-5">
      <div class="col-11 col-lg-6  m-auto d-flex flex-column text-center pt-3">

          <h4 class="fw-bolder fs-2 mb-3">   {{ $ $item[0]->title }}</h4>



              {!! html_entity_decode($ $item[0]->description) !!}


          <a class="btn bg-secondary-color mt-4 text-white col-6 col-lg-4 col-md-4 p-lg-3 p-2 px-4 m-auto" href="tel:00967775474720">إتصل بنا</a>

      </div>
      </div>
      </section>
      @endforeach

      @else
      <div class="alert alert-danger">
        يجب عليك اضافة البيانات والصورة من لوحة التحكم
      </div>

      @endif


<!--End of the call to Action Button-->


@include('partials.footer-scripts')

@stop
