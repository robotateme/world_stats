<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{
    public function __construct(
        protected Model $model
    ) {}
}