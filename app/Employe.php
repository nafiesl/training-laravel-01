<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    public function company()
    {
        return $this->belongTo(Company::class);
    }
}
