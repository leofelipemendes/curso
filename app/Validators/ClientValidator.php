<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 01/08/2015
 * Time: 23:44
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'required|max:255',
        'responsible' => 'required|max:255',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required'
    ];

}