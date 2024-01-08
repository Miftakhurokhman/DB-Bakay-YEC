<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassFasilitator extends Model
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
     * Get the fasils t the ClassFasilitator
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fasil()
    {
        return $this->belongsTo(Fasilitator::class, 'fasil_id', 'id');
    }
}
