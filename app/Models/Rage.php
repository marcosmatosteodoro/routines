<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rage extends Model
{
    use HasFactory;

    protected $fillable = array('name');

    public static function getRanges(): object
    {
        return self::all();
    }

    public static function getRange(int $id): object
    {
        return self::find($id);
    }

    public static function createRange(string $name): bool
    {
        $response = self::create(['name' => $name]);
        return !empty($response);
    }

    public static function updateRange(int $id, string $name): bool
    {
        $range = self::find($id);
        $range->name = $name;
        return $range->save();
    }

    public static function destroyRange(int $id): bool
    {
        $range = self::find($id);
        return $range->destroy();
    }
}
