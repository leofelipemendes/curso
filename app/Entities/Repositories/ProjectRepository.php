<?php

namespace CodeProject\Entities\Repositories;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProjectRepository extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}
