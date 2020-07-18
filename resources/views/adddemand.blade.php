@extends('layouts.layout')
@section('title','add new demand')
@section('content')
<section class="breadcrumb blog_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Submit New Demand</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- property area -->
<div class="apartment_part">
    <div class="container">

        <div class="row justify-content-between align-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="section_tittle">
                    <h1>Submit a new Demand
                    </h1>
                </div>
            </div>

        </div>
        <form action="{{route('demand.store')}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-row">
                <div class="col-sm-6">



                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label>Demand title <small>(required)</small></label>
                            <input name="title" type="text" class="form-control" placeholder="Super villa ...">

                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('max_price') ? ' has-error' : '' }}">
                            <label>Property price <small>(required)</small></label>
                            <input name="max_price" type="number" step="0.5" class="form-control" placeholder="3330000">

                            @if ($errors->has('max_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('max_price') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input name="telephone" type="text" class="form-control" placeholder="+1 473 843 7436"
                                value="{{Auth::user()->phone}}">
                        </div>
                    </div>
                </div>
            </div>
            <!--  End step 1 -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Property Description :</label>
                            <textarea name="discrition" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="col-sm-3">
                        <div class="form-group{{ $errors->has('Capacity') ? ' has-error' : '' }}">
                            <label>Capacity :</label>
                            <input type="number" name="Capacity" class="form-control"
                                placeholder="capacity..."></textarea>
                            @if ($errors->has('Capacity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Capacity') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Property City :</label>
                            <select name="city" id="lunchBegins" class="selectpicker" data-live-search="true"
                                data-live-search-style="begins" title="Select your city">
                                <option>Tanger</option>
                                <option>Rabat</option>
                                <option>Casablanca</option>
                                <option>Beni mellal</option>
                                <option>Marraekch</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Property Adresse :</label>
                            <input type="text" name="adresse" class="form-control" placeholder="Adresse..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-3">
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
                    </div>
                </div>
                <div class="col-sm-12 padding-top-15">
                    @forelse ($facilities as $facilitie)
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="{{$facilitie->id}}" value="{{$facilitie->id}}"
                                        name="facilities[]"> {{$facilitie->name}}
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


            </div>
            <div class="form-control col-sm-6">
                <input type="file" id="wizard-picture" name="imgPath">
            </div>
            <br>
          <button type="submit" class="btn_1 d-none d-lg-block">Submit demand</button>

        </form>
    </div>
</div>
<br>
<br>
@endsection
