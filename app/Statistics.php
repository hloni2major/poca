<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statistics extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function StatisticsByYearOfStudy()
    {
        return $this->hasMany(Year::class);
    }
}
