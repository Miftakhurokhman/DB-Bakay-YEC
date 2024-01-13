<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgressActivity extends Model
{
    use HasFactory;

    public function sub_activity()
    {
        return $this->belongsTo(SubActivity::class, 'sub_activity_id', 'id');
    }
}
