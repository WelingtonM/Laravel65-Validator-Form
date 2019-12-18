<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const TYPE_PERSON_PHYSICAL = 'person_physical';
    const TYPE_PERSON_COMMPANY = 'person_company';

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
