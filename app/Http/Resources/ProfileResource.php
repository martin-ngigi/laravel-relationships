<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'profile_name' => $this->profile_name,
            'created_at' => $this->created_at,
            'laest_posts' => $this->posts, // lastestPost is method defined in Profile.php
        ];
    }
}
