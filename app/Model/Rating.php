<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = "rating";
    protected $fillable=[  'id', 'user_id', 'bus_id', 'bus_quality', 'punctuality', 'Staff_behaviour', 'average', 'comments'];
    public $timestamps = false;

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus', 'bus_id',);
    }
}
