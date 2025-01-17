<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Area extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'city_id',
        'name',
        'lat',
        'lng',
        'active'
    ];

    public function getActiveAttribute($value)
    {
        return ($value == 1) ? "Active" : "Inactive";
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }


    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
