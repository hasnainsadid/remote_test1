<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AllUser extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'AllUser';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'email', 'password', 'profile_photo_path'];
}
