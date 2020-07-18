@extends('layouts.layout')
@section('title' , 'detail offer')
@section('script1')

@endsection
@section('content')
<section class="breadcrumb blog_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Detail Offer N° {{$offer->id}} : {{$offer->property_name}}</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h2>{{$offer->property_name}}</h2>

    <div class="card">
        <div class="row ">
            <div class="col-md-4">
                <img src="{{asset('../offers/'.$offer->id.'.png')}}" width="100%" height="100%">
            </div>
            <div class="col-md-8 px-3">
                <div class="card-block px-3">
                    <h4 class="card-title">Title : {{$offer->property_name}}</h4>
                    <h3 class="card-title">Price : {{$offer->property_price}} DH</h3>
                    <p class="card-text">Description : {{$offer->description}} </p>
                    <p class="card-text">Details : <ul>
                            <li>capacity : {{$offer->capacity}}</li>
                            <li>City :{{$offer->city}} </li>
                            <li>Adresse :{{$offer->adresse}} </li>
                            <li>Area : {{$offer->area}}</li>
                        </ul>
                    </p>
                    <button type="button" class="btn_1 d-none d-lg-block" data-toggle="modal"
                        data-target="#myModal">Contact the owner</button>

                    <!-- Modal -->

                </div>
            </div>

        </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">User : {{$offer->user->name}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Email : {{$offer->user->email}} <br>
                    Phone : {{$offer->telephone}}
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>

<br>
<br>

@endsection
