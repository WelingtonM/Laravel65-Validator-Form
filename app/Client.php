<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const MARITAL_STATUS = [
        1 => 'single',
        2 => 'married',
        3 => 'divorced'
    ];
}
