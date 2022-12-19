<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'title',
        'description',
    ];

    /**
     *
     * (this) post belongs to profile.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
