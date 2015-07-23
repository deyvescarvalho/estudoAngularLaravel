<?php
/**
 * Created by PhpStorm.
 * User: mint
 * Date: 23/07/15
 * Time: 12:08
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

    public function Model()
    {
        return Client::class;
    }
}