<?php

namespace codeProject\Validators;
use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{

        protected $rules = [

            'project_id'=> 'required|integer',
            'title' => 'required|max:50',
            'note' => 'required|max:255',

        ];

}