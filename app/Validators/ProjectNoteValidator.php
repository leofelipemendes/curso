<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 14/08/2015
 * Time: 22:01
 */

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{
    protected $rules = [
        'project_id' => 'required|integer',
        'title' => 'required',
        'note' => 'required',

    ];

}