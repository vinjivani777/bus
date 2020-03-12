<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "bus_gallarys";
    protected $fillable=['id', 'image', 'user_id', 'bus_id','created_id', 'created_by'];
    public $timestamps = false;

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus','bus_id');
    }
}
