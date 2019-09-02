<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    //
    protected $table = 'Registros';

    protected $primaryKey = 'id';

    public $incrementing = true;
}
