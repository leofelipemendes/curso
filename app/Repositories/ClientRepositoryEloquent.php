<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 26/07/2015
 * Time: 19:17
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }
}