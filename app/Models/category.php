<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    // para tirar a opção de created_at updated_at das tabelas
    public $timestamps = false;

    // aqui a solução para inserir produtos com status default 'A' sem precisar ter ele no form
    // protected $attributes = ['status' => 'A'];
    
    // campos que serão preenchidos pelo Request::all()
    protected $fillable = array('name');

   // campos que serão exclusivo e não serão aceitos via request get ou post
    // protected $guarded = ['id'];
}
