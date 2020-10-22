<?php

namespace App\Models;

use App\Models\User;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    public function themes() {
        return $this->hasMany(Theme::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
