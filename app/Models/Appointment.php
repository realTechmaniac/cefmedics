<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'speciality', 'reason', 'address', 'file_path'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
