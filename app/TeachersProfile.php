<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class TeachersProfile extends Model
{
    protected $table = 'teachers_profiles';
    protected $guarded = [];
    protected $primaryKey = 'id';

    
    public function scopeGetTeachersProfileByid($query, $userid)
    {
        return $query->where('usersid',$userid);
    }
}
