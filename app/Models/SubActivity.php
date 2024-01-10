<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubActivity extends Model
{
    use HasFactory;


    /**
     * Get the user associated with the SubActivity
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type()
    {
        return $this->belongsTo(SubActivityType::class, 'type_id', 'id');
    }
}
