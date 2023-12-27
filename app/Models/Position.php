<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departement;

class Position extends Model
{
    use HasFactory;
    public $table = "positions";
    protected $guarded = ['id_position'];

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id_departement');
    }
}
