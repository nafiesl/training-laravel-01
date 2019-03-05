<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class)->withDefault(['name' => 'Nganggur']);
    }

    public function getNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
