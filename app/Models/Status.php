<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    protected $fillable = array('name');

    public static function getAllStatus(): object
    {
        return self::all();
    }

    public static function getStatus(int $id): object
    {
        return self::find($id);
    }

    public static function createStatus(string $name): bool
    {
        $response = self::create(['name' => $name]);
        return !empty($response);
    }

    public static function updateStatus(int $id, string $name): bool
    {
        $Status = self::find($id);
        $Status->name = $name;
        return $Status->save();
    }

    public static function destroyStatus(int $id): bool
    {
        $status = self::find($id);
        return $status->destroy();
    }
}
