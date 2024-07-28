<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];

    public function Sim(): HasMany
    {
        return $this->hasMany(Sim::class,'plan_id','id');
    }
}
