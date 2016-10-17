<?php

namespace codeProject;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'responsable',
        'email',
        'adress',
        'phone',
        'obs'

    ];
}
