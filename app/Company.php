<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function employes()
    {
        return $this->hasMany(Employe::class);
    }
}
