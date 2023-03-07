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
@if(isset($preperationSection))

  <div class="prepare-and-reviews  bg-white pt-5">
      <div class="col-11 col-lg-6  m-auto d-flex flex-column text-center pt-3">
          <h4 class="fw-bold fs-2">  {{$preperationSection->title}}</h4>
          <h5 class="preparation-title mt-1 fw-light fs-5"> {{$preperationSection->sub_title}}</h5>
          <p class="preparation-description    description-color mt-3 fs-6">
            {!! $preperationSection->description !!}

          </p>

          <img class="mt-5 fix-lamp-image img-fluid" src="{{asset('storage/'.$preperationSection->main_img)}}" alt="Fix House Services">


          <div class="thumbnails-container row mt-5 col-12 m-auto">
<img class="col-5 col-lg-3  m-auto  img-thumbnail review-image-width" src="{{asset('storage/'.$preperationSection->sub_img_one)}}" alt="Electronics Service">
<img class="col-5  col-lg-3 m-auto  mx-1 mx-lg-2 img-thumbnail review-image-width" src="{{asset('storage/'.$preperationSection->sub_img_two)}}" alt="Constr uctionService">
<img class="col-6  col-lg-3 m-auto  mt-2 img-thumbnail review-image-width" src="{{asset('storage/'.$preperationSection->sub_img_three)}}" alt="Janitor Service">

          </div>

      </div>

  </div>
@else
<div class="alert alert-danger">
    يجب عليك اضافة محتوى التجهيزات من لوحة التحكم
</div>

  @endif
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
            @if(isset($packagesSection))
            @foreach ($packagesSection as $item )

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
                                  <span class="text-black">{!! $item->title!!} </span>
                              </div>
                              <!--//HEAD END-->

                          </div>
                          <!--//HEAD CONTENT END-->

                          <!--PRICE START-->
                          <div class="generic_price_tag clearfix">
                              <span class="price">
                                  <span class="sign">{!! $item->cureency!!}</span>
                                  <span class="currency">{!! $item->price!!}</span>
                                  <span class="cent"></span>
                                  <span class="month">/{!! $item->period!!}</span>
                              </span>
                          </div>
                          <!--//PRICE END-->

                      </div>
                      <!--//HEAD PRICE DETAIL END-->

                      <!--FEATURE LIST START-->
                      <div class="generic_feature_list">
                          <ul>
                              <li><span>{!! $item->feature_one!!}</li>
                              <li><span>{!! $item->feature_two!!}</li>
                              <li><span>{!! $item->feature_three!!}</li>
                              <li><span>{!! $item->feature_four!!}</li>
                              <li><span>{!! $item->feature_five!!}</li>
                          </ul>
                      </div>
                      <!--//FEATURE LIST END-->

                      <!--BUTTON START-->
                      <div class="generic_price_btn clearfix">
                          <a class="" href="">{{$item->subscribe_label}} </a>
                      </div>
                      <!--//BUTTON END-->

                  </div>
                  <!--//PRICE CONTENT END-->

              </div>
              @endforeach

              @else
              <div class="alert alert-danger">
يجب عليك اضافة محتوى باقات الاشتراك من لوحة التحكم
              </div>
              @endif

          </div>
          <!--//BLOCK ROW END-->

      </div>
  </section>

</div>
<!--End of Packages Price List-->


<!--Start of the call to Action Button-->
@if(isset($callToActionSection))

<section>
  <div class="prepare-and-reviews  bg-white pt-5 pb-5">
      <div class="col-11 col-lg-6  m-auto d-flex flex-column text-center pt-3">

          <h4 class="fw-bolder fs-2 mb-3">   {{ $callToActionSection->title }}</h4>



              {!! $callToActionSection->description!!}


          <a class="btn bg-secondary-color mt-4 text-white col-6 col-lg-4 col-md-4 p-lg-3 p-2 px-4 m-auto" href="tel:00967775474720"> {{$callToActionSection->button_label}}</a>

      </div>
      </div>
      </section>


      @else
      <div class="alert alert-danger">
        يجب عليك اضافة البيانات والصورة من لوحة التحكم
      </div>

      @endif


<!--End of the call to Action Button-->


@include('partials.footer-scripts')

@stop
