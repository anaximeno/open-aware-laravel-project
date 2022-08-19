<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    function donator() {
        return $this->belongsTo(User::class);
    }

    function project() {
        return $this->belongsTo(Project::class);
    }
}
