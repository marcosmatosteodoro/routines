<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'activities';

    protected $fillable = array('name', 'description', 'category_id');

    public function getActivities(): object
    {
        return self::all();
    }

    public function getActivity(int $id): object
    {
        return self::find($id);
    }

    public function createActivity(string $name, string $description, int $category_id): bool
    {

        if($this->issetCategoryId($category_id))
            return false;

        $response = self::create([
            'name' => $name,
            'description' => $description,
            'category_id' => $category_id,
        ]);
        
        return !empty($response);
    }

    public function updateActivity(int $id, string $name, string $description, int $category_id): bool
    {
        if($this->issetCategoryId($category_id))
            return false;

        $activity = self::find($id);
        $activity->name = $name;
        $activity->description = $description;
        $activity->category_id = $category_id;

        return $activity->save();
    }

    public function destroyActivity(int $id): bool
    {
        $category = self::find($id);
        return $category->destroy();
    }

    protected function issetCategoryId(int $category_id): bool
    {
        return Category::find($category_id) !== null;
    }
}
