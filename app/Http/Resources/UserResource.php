<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if(($this->profile == null) || ($this->phone == null )){
            return [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                // 'profile_name' => $this->profile->profile_name, //   WORKING ;-)
                'profile' => $this->profile,
                // 'phone_number' => $this->phone->phone_number, //   WORKING ;-)
                'phone'=>$this->phone,
                // 'posts'=>$this->profile->posts,
            ];
        }
        else{
            return [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                'profile_name' => $this->profile->profile_name, //   WORKING ;-)
                'profile' => $this->profile,
                'phone_number' => $this->phone->phone_number, //   WORKING ;-)
                'phone'=>$this->phone,
                'posts'=>$this->profile->posts,
            ];
        }

        //else

        
       
    }
}
