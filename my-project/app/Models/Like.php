<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    function user() {
        return $this->hasOne(User::class);
    }

    function project() {
        return $this->hashone(Project::class);
    }
}
