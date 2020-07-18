<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\Facilitie;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandController extends Controller
{
    public function index(){
           $demands = Demand::orderBy('created_at', 'desc')
           ->get();
           return view('listdemand' , [
           'demands' => $demands
           ]);
    }
    public function add(){
        $facilities = Facilitie::all();
        return view('adddemand', [
        'facilities' => $facilities
        ]);
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
     $destinationPath = 'images/demands';

     $demand = new Demand();
     $demand->user_id = Auth::user()->id;
     $demand->title = $request->input('title');
     $demand->max_price = $request->input('max_price');
     $demand->telephone = $request->input('telephone');
     $demand->description = $request->input('discrition');
     $demand->capacity = $request->input('Capacity');
     $demand->city = $request->input('city');
     $demand->adresse = $request->input('adresse');
     $demand->area = $request->input('area');
     $demand->imgPath = $this->uploadImages($request,$destinationPath);

     $demand->save();

     $demand->facilities()->toggle($request->input('facilities'));

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
     $demand = Demand::find($id);
     return view('detaildemand' , [
     'offer' =>$demand
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
     public function update(Request $request, $id)
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
     Demands::where('id',$id)->delete();
     return redirect()->route('demand.index');
     }

     //'images/Offers'
     public function uploadImages($request , $path){
     if ($request->hasFile('imgPath')) {
     $image = $request->file('imgPath');
     $fileName = $image->getClientOriginalName();
     return $request->imgPath->storeAs($path, $fileName, 'public');
     }
     return null;
     }
}
