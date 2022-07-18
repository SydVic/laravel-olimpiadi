<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    public function nation() {
        return $this->hasOne('App\Nation');
    }
}
