<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profile_name',
    ];

    /**
     * (this)one phone belongs to one user
     * Summary of user
     * @return BelongsTo
     */
    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id'); // Omit the second parameter if you're following convention
    }

    /**
     * (this) profile has many posts.
     * Summary of posts
     * @return HasMany
     */
    public function posts(): HasMany{
        return $this->hasMany(Post::class);
            //Or: return $this->hasMany(Post::class, 'foreign_key');
    }
}
