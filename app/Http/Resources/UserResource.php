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
        // 'username',
        // 'firstname',
        // 'lastname',
        // 'phone',
        // 'email',
        return [
            'id'=>$this->id,
            'username'=>$this->username,
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'roles'=>$this->roles,
            'shops'=>$this->shops,
            'teller'=>$this->teller

        ];
    }
}
