<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRole extends Model
{
    use HasFactory;

    $fillable = [
        'name',
        'description',
        'end_at'
    ];

    function project() {
        return $this->hashOne(Project::class);
    }

    function user() {
        return $this->hashOne(User::class);
    }
}
