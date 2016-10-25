<?php

namespace codeProject\Repositories;
use codeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Created by PhpStorm.
 * User: Flavio
 * Date: 20/10/2016
 * Time: 16:31
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

    public function Model()
    {
        return Client::class;
    }

}