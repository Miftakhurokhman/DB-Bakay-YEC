<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgressActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sub_activity_id',
        'answer',
    ];

    public function sub_activity()
    {
        return $this->belongsTo(SubActivity::class, 'sub_activity_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
