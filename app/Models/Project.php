<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $table = "projects";
    protected $guarded = ['id_project'];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id_status');
    }
}
