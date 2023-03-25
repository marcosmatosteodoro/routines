<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routines extends Model
{
    use HasFactory;
    // campos que serão preenchidos pelo Request::all()
    protected $fillable = array('activity_id', 'status_id', 'date');

}
