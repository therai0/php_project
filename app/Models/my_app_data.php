<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class my_app_data extends Model
{
    use HasFactory;
    protected $fillable = [ "name","password","phone","images"];
}
