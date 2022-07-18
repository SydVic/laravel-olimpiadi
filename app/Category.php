<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function athletes() {
        return $this->hasMay('App\Athlete');
    }
}