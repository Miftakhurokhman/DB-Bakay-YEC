<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    /**
     * Get the user that owns the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ClassCategory::class, 'category_id', 'id');
    }

    /**
     * Get all of the fasil for the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function class_fasil()
    {
        return $this->hasMany(ClassFasilitator::class, 'class_id', 'id');
    }


    /**
     * Get all of the class_activoty for the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function class_activity()
    {
        return $this->hasMany(Activity::class, 'class_id', 'id');
    }

    /**
     * Get all of the user_class for the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_class()
    {
        return $this->hasMany(UserClass::class, 'class_id', 'id');
    }
}
