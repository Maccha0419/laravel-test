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


    public function scopeKeywordSearch($query, $fullname,$gender,$date_start,$date_finish,$email)
    {
        if (!empty($fullname)) {
            $query->where('fullname', 'like', '%' . $fullname . '%');
        }
        if (!empty($gender)) {
            $query->where('fullname', 'like', '%' . $gender . '%');
        }
        if (!empty($date_start)) {
            $query->where('fullname', 'like', '%' . $date_start . '%');
        }
        if (!empty($date_finish)) {
            $query->where('fullname', 'like', '%' . $date_finish . '%');
        }
        if (!empty($date_finish)) {
            $query->where('fullname', 'like', '%' . $email . '%');
        }
    }
}