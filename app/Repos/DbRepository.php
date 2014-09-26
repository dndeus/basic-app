<?php namespace App\Repos;


abstract class DbRepository {

    public function insert($data)
    {
        return $this->model->create($data);
    }
} 