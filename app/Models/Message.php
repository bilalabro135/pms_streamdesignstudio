<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates    = ['deleted_at'];
    protected $fillable = [
        'message',
        'sender_id',
        'receiver_id',
        'active',
        'created_by',
        'updated_by'
    ];
    public function getActiveAttribute($value)
    {
        return ($value == 1) ? "Active" : "Inactive";
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
