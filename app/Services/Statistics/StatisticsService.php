<?php

namespace App\Services\Statistics;

use App\DTOs\StatisticsFiltersDto;
use App\Repositories\StatisticsRepository;
use App\Services\Contracts\ServiceInterface;

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
     * @return array
     */
    public function getWorldStatistics(StatisticsFiltersDto $filtersDto) :array
    {
        return $this->statisticsRepository->getMainWorldStatistics($filtersDto);
    }
}