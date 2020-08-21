<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pilote extends Model
{
    //

    protected $fillable = [
        'Nom', 'Prenom', 'Date_Of_Birth',
    ];

}
