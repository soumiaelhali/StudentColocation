<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Facilitie;
use App\Models\Image;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        $facilities = Facilitie::all();
        return view('offer' , [
        'facilities' => $facilities
        ]);
    }
      public function showlist()
      {
      $offers = Offer::orderBy('created_at', 'desc')
      ->limit(7)
      ->get();

      return view('listoffer' , [
      'offers' => $offers
      ]);
      }

      /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function create()
      {
      $facilities = Facilitie::all();
      return view('submit-property' , [
      'facilities' => $facilities
      ]);
      }

      /**
      * Store a newly created resource in storage.
      *
      * @param \Illuminate\Http\Request $request
      * @return \Illuminate\Http\Response
      */
  public function store(OfferRequest $request)
  {
  $iMG = new Image();
  $list=[];
  $destinationPath = 'images/Offers';

  $offre = new Offer();
  $offre->user_id = Auth::user()->id;
  $offre->property_name = $request->input('propertyname');
  $offre->property_price = $request->input('propertyprice');
  $offre->telephone = $request->input('phone');
  $offre->description = $request->input('discrition');
  $offre->capacity = $request->input('Capacity');
  $offre->city = $request->input('city');
  $offre->adresse = $request->input('adresse');
  $offre->area = $request->input('area');
  $offre->lat = 0;
  $offre->lng = 0;
  $offre->imgPath = $this->uploadImages($request,$destinationPath);

  $offre->save();

  foreach($request->file('images') as $image){
  $fileName = $image->getClientOriginalName();
  $imagesUri = $image->storeAs($destinationPath.'/id_'.$offre->id, $fileName, 'public');

  $iMG->imgPath = $imagesUri;
  $iMG->offer_id = $offre->id;
  array_push($list , $iMG->toArray());
  }
  Image::insert($list);
  $offre->facilities()->toggle($request->input('facilities'));

  return redirect('/');
  }

      /**
      * Display the specified resource.
      *
      * @param int $id
      * @return \Illuminate\Http\Response
      */
      public function show($id)
      {
      $offer = Offer::with('image')->find($id);
      return view('detailoffer' , [
      'offer' =>$offer
      ]);
      }

      /**
      * Show the form for editing the specified resource.
      *
      * @param int $id
      * @return \Illuminate\Http\Response
      */
      public function edit($id)
      {
      //
      }

      /**
      * Update the specified resource in storage.
      *
      * @param \Illuminate\Http\Request $request
      * @param int $id
      * @return \Illuminate\Http\Response
      */
      public function update(OfferRequest $request, $id)
      {
      //
      }

      /**
      * Remove the specified resource from storage.
      *
      * @param int $id
      * @return \Illuminate\Http\Response
      */
      public function destroy($id)
      {
      //
      }

      //'images/Offers'
      public function uploadImages($request , $path){
      if ($request->hasFile('imgPath')) {
      $image = $request->file('imgPath');
      $fileName = $image->getClientOriginalName(). '.' . $image->getClientOriginalExtension();
      return $request->imgPath->storeAs($path, $fileName, 'public');
      }
      return null;
      }
}
