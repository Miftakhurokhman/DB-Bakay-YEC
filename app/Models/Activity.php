<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    /**
     * Get the classes that owns the ClassFasilitator
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function class()
    {
        return $this->belongsTo(Kelas::class, 'class_id', 'id');
    }

    /**
     * Get all of the comments for the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sub_activity()
    {
        return $this->hasMany(SubActivity::class, 'activity_id', 'id');
    }

}
