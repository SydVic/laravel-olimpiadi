<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    public function nation() {
        return $this->belongsTo('App\Nation');
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }
}
