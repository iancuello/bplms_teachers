<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    public function scopeOrderByName($query)
    {
        return $query->orderBy('countries_name', 'asc');
    }
}
