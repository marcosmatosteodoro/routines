<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'activities';

    // para tirar a opção de created_at updated_at das tabelas
    // public $timestamps = false;

    // aqui a solução para inserir produtos com status default 'A' sem precisar ter ele no form
    // protected $attributes = ['status' => 'A'];
    
    // campos que serão preenchidos pelo Request::all()
    protected $fillable = array('name', 'description', 'category_id');

   // campos que serão exclusivo e não serão aceitos via request get ou post
    // protected $guarded = ['id'];
}
