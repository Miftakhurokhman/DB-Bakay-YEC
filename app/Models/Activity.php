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
     * Get the sub_activity that owns the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sub_activity()
    {
        return $this->belongsTo(SubActivity::class, 'activity_number', 'id');
    }
}
