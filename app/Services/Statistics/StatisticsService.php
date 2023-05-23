<?php

namespace App\Services\Statistics;

use App\DTOs\StatisticsFiltersDto;
use App\Repositories\StatisticsRepository;
use App\Services\Contracts\ServiceInterface;
use Illuminate\Support\Collection;

class StatisticsService implements ServiceInterface
{

    /**
     * @param  \App\Repositories\StatisticsRepository  $statisticsRepository
     */
    public function __construct(
        private StatisticsRepository $statisticsRepository
    ) {}

    /**
     * @param  \App\DTOs\StatisticsFiltersDto  $filtersDto
     * @return array|\Illuminate\Support\Collection
     */
    public function getWorldStatistics(StatisticsFiltersDto $filtersDto): array|Collection
    {
        return $this->statisticsRepository
            ->getMainWorldStatistics($filtersDto)
            ->get()
            ->toArray();
    }
}