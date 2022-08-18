<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    $fillable = [
        'description',
        'date_or_creation'
    ];

    function projectRoles() {
        return $this->hasMany(ProjectRole::class);
    }

    function donationsReceived() {
        return $this->hasMany(Donation:class);
    }

    function likesReceived() {
        return $this->hasMany(Like::class);
    }

    function creator() {
        return $this->hasOne(User::class, 'creator_id');
    }
}