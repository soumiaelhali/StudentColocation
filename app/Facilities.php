<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model

{
    protected $table = 'facilities';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    public function offer()
    {
    return $this->belongsToMany('App\Models\Offer', 'offer_faci', 'facilitie_id', 'offer_id');
    }
}
