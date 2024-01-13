<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubActivity extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(SubActivityType::class, 'type_id', 'id');
    }

    public function user_progress()
    {
        return $this->hasMany(UserProgressActivity::class, 'sub_activity_id', 'id');
    }
}
