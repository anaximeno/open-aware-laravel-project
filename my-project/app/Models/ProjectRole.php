<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'ended_at',
        'project_id',
        'user_id',
        'begun_at'
    ];

    function project() {
        return $this->belongsTo(Project::class);
    }

    function user() {
        return $this->belongsTo(User::class);
    }
}
