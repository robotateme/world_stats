<?php

namespace App\Repositories;

use App\DTOs\StatisticsFiltersDto;
use App\Repositories\Contracts\BaseRepository;
use App\Services\Contracts\ServiceInterface;

class StatisticsRepository extends BaseRepository
{
    public function getMainWorldStatistics(StatisticsFiltersDto $filters) : array
    {
        $query = $this->model->newQuery();
        dd($this->model::class);
        return $query->get()->toArray();
    }

}