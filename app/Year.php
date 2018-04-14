<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{

    protected $fillable = ['wrote', 'passed'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statistics()
    {
        return $this->belongsTo(Statistics::class);
    }
}
