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

    protected $fillable = [
        'name',
        'document_number',
        'email',
        'phone',
        'defaulter',
        'date_birth',
        'sex',
        'marital_status',
        'physical_disability'
    ];
}
