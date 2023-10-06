<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];

    // protected function setFullNameAttribute(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => 'first_name'.'last_name',
    //         set: fn ($value) => str_replace([",", "kg"], "", $value)
    //     );
    // }
    // protected function setFullNameAttribute($attribute)
    // {
    //     $postcode = $request->only(['last_name', 'first_name']);
    //     $fullname = implode($postcode);
    //     return $this->attributes['last_name'] . ' ' . $this->attributes['first_name'];
    // }
}
