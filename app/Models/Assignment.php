<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    public $table = "assignments";
    protected $guarded = ['id_assignment'];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id_task');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id_employee');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id_status');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id_position');
    }
}
