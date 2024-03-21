<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'linkedin_username',
        'facebook_username',
        'github_username',
        'email',
        'phone_number'
    ];
}
