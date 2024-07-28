<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sim extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'plan_id',
        'sim_number',
        'activition_status',
    ];
    public function User():BelongsTo
    {
        return $this->belongsTo(User::class,'id', 'user_id');
    }
    public function Plan():BelongsTo
    {
        return $this->belongsTo(plan::class,'id', 'plan_id');
    }
}
