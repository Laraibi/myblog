<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //

    public function pilote(){
        
        return $this->belongsTo("App\pilote");
    }
}
