<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 14/08/2015
 * Time: 22:01
 */

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
    protected $rules = [
        'owner_id' => 'required',
        'client_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'progress' => 'required',
        'status' => 'required',
        'due_date' => 'required'
    ];

}