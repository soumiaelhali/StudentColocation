@extends('layouts.layout')
@section('title','List demand')
@section('content')
<section class="breadcrumb blog_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>List of Demands</h2>
                        <p>Home<span class="ti-angle-double-right"></span>Demand</p>
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
                    <h1>Demands
                    </h1>
                </div>
            </div>
            <div class="col-md-4 col-lg-5">
                <div class=" float-right btn_1 d-none d-lg-block">
                <a href="{{route('adddemand')}}" class="float-right">Submit Demand<span class="ti-arrow-right"></span></a>
                </div>

            </div>
        </div>
        <div class="row">
            @foreach ($demands as $item)

            <div class="col-md-4 col-lg-4">
                <div class="single_appartment_part">
                    <div class="appartment_img">

                        <img src="{{asset('../offers/'.$item->id.'.png')}}" alt="">
                        <div class="single_appartment_text">
                            <h3>${{$item->max_price}}</h3>
                            <p><span class="ti-location-pin"></span> {{$item->adresse}}</p>
                        </div>
                    </div>
                    <div class="single_appartment_content">
                        <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>{{$item->title}} in {{$item->city}}</p>

                        <a href="{{route('demand.show' ,['demand'=>$item->id])}}">
                            <h4>{{$item->title}}</h4>
                        </a>
                        <ul class="list-unstyled">

                            <li><a href=""><span class="flaticon-frame"></span></a> {{$item->area}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
