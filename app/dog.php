<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dog extends Model
{
    protected $fillable = ['name', 'breed', 'age', 'height','fur','date','description','vaccinated','cats','dogs','neutered','comands','image'];
}
