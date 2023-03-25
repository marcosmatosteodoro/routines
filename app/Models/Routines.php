<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Routines extends Model
{
    use HasFactory;
    // campos que serão preenchidos pelo Request::all()
    protected $fillable = array('activity_id', 'status_id', 'date');

    public function getRoutines(): object
    {
        return self::all();
    }

    public function getRoutine(int $id): object
    {
        return self::find($id);
    }

    public function createRoutine(int $activity_id, int $status_id, string $date): bool
    {
        if(!$this->issetActivityIdAndStatusId($activity_id, $status_id))
            return false;

        $response = self::create([
            'activity_id'=> $activity_id,
            'status_id'=> $status_id,
            'date'=> $date
        ]);

        return !empty($response);
    }

    public function updateRoutine(int $id, int $activity_id, int $status_id, string $date): bool
    {
        $routine = self::find($id);
        $routine->activity_id = $activity_id;
        $routine->status_id = $status_id;
        $routine->date = $date;

        return $routine->save();
    }

    public function destroyRoutine(int $id): bool
    {
        $routine = self::find($id);
        return $routine->destroy();
    }

    protected function issetActivityIdAndStatusId(int $activity_id, int $status_id): bool
    {
        return (
            (Activity::find($activity_id) !== null) &&
            (Status::find($status_id) !== null)
        );
    }
}
