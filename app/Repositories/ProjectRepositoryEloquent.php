<?php

namespace CodeProject\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

use CodeProject\Entities\Project;

/**
 * Class ProjectRepositoryRepositoryEloquent
 * @package namespace CodeProject\Repositories;
 */
class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository

{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Project::class;
    }
}