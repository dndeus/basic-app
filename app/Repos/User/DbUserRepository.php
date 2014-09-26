<?php namespace App\Repos\User;

use App\Repos\DbRepository;
use App\User;

class DbUserRepository extends DbRepository implements UserRepoInterface{

    protected $model;

    public function __construct(User $model) {
        $this->model = $model;
    }

}