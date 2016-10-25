<?php

namespace codeProject\Validators;
use Prettus\Validator\LaravelValidator;

class Validator extends LaravelValidator
{

        protected $rules = [

            'name'=> 'required|max:255',
            'responsable' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'adress' => 'required'
        ];

}