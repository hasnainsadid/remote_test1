<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllUser extends Model
{
    use HasFactory;

    protected $table = 'AllUser';
    protected $fillable = ['name', 'email', 'password', 'profile_photo_path'];
}
