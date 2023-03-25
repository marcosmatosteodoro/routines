<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    
    // campos que serão preenchidos pelo Request::all()
    protected $fillable = array('name');

   // campos que serão exclusivo e não serão aceitos via request get ou post
    protected $guarded = ['created_at', 'updated_at'];

    public static function getCategories(): object
    {
        return self::all();
    }

    public static function getCategory(int $id): object
    {
        return self::find($id);
    }

    public static function createCategory(string $name): bool
    {
        $response = self::create(['name' => $name]);
        return !empty($response);
    }

    public static function updateCategory(int $id, string $name): bool
    {
        $category = self::find($id);
        $category->name = $name;
        return $category->save();
    }

    public static function destroyCategory(int $id): bool
    {
        $category = self::find($id);
        return $category->destroy();
    }
}
