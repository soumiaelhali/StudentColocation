@extends('layouts.layout')
@section('title','List offer')
@section('content')
<section class="breadcrumb blog_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>List of Properties</h2>
                        <p>Home<span class="ti-angle-double-right"></span>Offer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="apartment_part">
    <div class="container">
        <div class="row justify-content-between align-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="section_tittle">
                    <h1>offers
                    </h1>
                </div>
            </div>
            <div class="col-md-4 col-lg-5">
                <div class="view_more_btn float-right d-none d-md-block">
                    <a href="#" class="btn_2">see more<span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($offers as $item)

            <div class="col-md-4 col-lg-4">
                <div class="single_appartment_part">
                    <div class="appartment_img">

                       <img src="{{asset('../offers/'.$item->id.'.png')}}" alt="">
                        <div class="single_appartment_text">
                            <h3>${{$item->property_price}}</h3>
                            <p><span class="ti-location-pin"></span> {{$item->adresse}}</p>
                        </div>
                    </div>
                    <div class="single_appartment_content">
                        <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                    <p>{{$item->property_name}}</p>
                        <a href="{{route('offer.show' ,['offer'=>$item->id])}}">
                            <h4>{{$item->property_name}}</h4>
                        </a>
                        <ul class="list-unstyled">

                            <li><a href=""><span class="flaticon-frame"></span></a> {{$item->area}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <!--<div class="col-md-4 col-lg-4">
                <div class="single_appartment_part">
                    <div class="appartment_img">
                        <img src="img/appertment_2.png" alt="">
                        <div class="single_appartment_text">
                            <h3>$1,235632</h3>
                            <p><span class="ti-location-pin"></span> 384 Treeline Park, San Antonio, TX</p>
                        </div>
                    </div>
                    <div class="single_appartment_content">
                        <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>Home, Apartment</p>
                        <a href="#">
                            <h4>Detached House For Sale</h4>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                            <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                            <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single_appartment_part">
                    <div class="appartment_img">
                        <img src="img/appertment_3.png" alt="">
                        <div class="single_appartment_text">
                            <h3>$1,235632</h3>
                            <p><span class="ti-location-pin"></span> 384 Treeline Park, San Antonio, TX</p>
                        </div>
                    </div>
                    <div class="single_appartment_content">
                        <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>Home, Apartment</p>
                        <a href="#">
                            <h4>Detached House For Sale</h4>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                            <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                            <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>
@endsection
