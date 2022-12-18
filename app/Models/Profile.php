<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profile_name',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id'); // Omit the second parameter if you're following convention
    }
}
