<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\RepositoryInterface;

class NewsRepository implements RepositoryInterface
{
    protected News $model;

    public function __construct(News $model = null)
    {
        if ($model)
            $this->model = $model;
        else
            $this->model = new News();
    }

    public function save(array $request): News
    {
        foreach ($request as $key => $value) {
            if (in_array($key, $this->model->getFillable()))
                $this->model->{$key} = $value;
        }

        $this->model->save();

        return $this->model;
    }

    public function get(): News
    {
        return $this->model;
    }
}
