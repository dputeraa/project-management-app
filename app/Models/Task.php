<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public $table = "tasks";
    protected $guarded = ['id_task'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id_project');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id_status');
    }
}
