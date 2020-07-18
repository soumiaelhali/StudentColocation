@extends('layouts.layout')
@section('title','offer')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<section class="breadcrumb blog_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Submit New Property</h2>
                            <p>Home<span class="ti-angle-double-right"></span>Submit Property</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- End page header -->

<!-- property area -->
<div class="apartment_part">
<div class="container">

<div class="row justify-content-between align-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="section_tittle">
            <h1>Submit a new Offer
            </h1>
        </div>
    </div>
    <div class="col-md-4 col-lg-5">
        <div class="view_more_btn float-right d-none d-md-block">
            <a href="#" class="btn_2">see more<span class="ti-arrow-right"></span></a>
        </div>
    </div>
</div>
    <form action="{{route('offer.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('propertyname') ? ' has-error' : '' }}">
                    <label>Property name <small>(required)</small></label>
                    <input name="propertyname" type="text" class="form-control" placeholder="Super villa ...">

                    @if ($errors->has('propertyname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('propertyname') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('propertyprice') ? ' has-error' : '' }}">
                    <label>Property price <small>(required)</small></label>
                    <input name="propertyprice" type="text" class="form-control" placeholder="3330000">

                    @if ($errors->has('propertyprice'))
                    <span class="help-block">
                        <strong>{{ $errors->first('propertyprice') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Telephone</label>
                    <input name="phone" type="text" class="form-control" placeholder="+1 473 843 7436" value="">
                </div>
            </div>
        </div>
        <div class="form-row">
        <div class="col-sm-6">
                    <div class="form-group">
                        <label>Property Description :</label>
                        <textarea name="discrition" class="form-control"></textarea>

            </div>



                    <div class="form-group{{ $errors->has('Capacity') ? ' has-error' : '' }}">
                        <label>Capacity :</label>
                        <input type="number" name="Capacity" class="form-control" placeholder="capacity..."></textarea>
                        @if ($errors->has('Capacity'))
                        <span class="help-block">
                            <strong>{{ $errors->first('Capacity') }}</strong>
                        </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label>Property City :</label>
                        <select name="city" id="lunchBegins" class="form-control" data-live-search="true"
                            data-live-search-style="begins" title="Select your city">
                            <option>Tanger</option>
                            <option>Rabat</option>
                            <option>Casablanca</option>
                            <option>Beni mellal</option>
                            <option>Marraekch</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Property Adresse :</label>
                        <input type="text" name="adresse" class="form-control" placeholder="Adresse..."></textarea>
                    </div>


                    <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                        <label>Area :</label>
                        <input type="number" name="area" step="0.1" class="form-control"
                            placeholder="area m²..."></textarea>
                        @if ($errors->has('area'))
                        <span class="help-block">
                            <strong>{{ $errors->first('area') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-sm-12 padding-top-15">
                            @forelse ($facilities as $facilitie)
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="{{$facilitie->id}}" value="{{$facilitie->id}}" name="facilities[]">
                                            {{$facilitie->name}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>No facilitie found :</label>
                                        <textarea name="discrition" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                        <div class="tab-pane" id="step3">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="property-images">Choose Images :</label>
                                        <input class="form-control" type="file" id="property-images" name="images[]" multiple>
                                        <small class="help-block">Select multipel images for your property .</small>
                                    </div>
                                </div>
                            </div>
                        </div>

        </div>
            <br>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <button type="submit" class="btn_1 d-none d-lg-block">Submit property</button>
    </form>
</div>
</div>
<br>
<br>

@endsection
