<?php

namespace App\Http\Controllers;

use App\DTOs\StatisticsFiltersDto;
use App\Http\Requests\StatsRequest;
use App\Services\Statistics\StatisticsService;

class StatisticsController extends Controller
{


    public function __construct(
        private StatisticsService $statisticsService,
    ) {}

    /**
     * @throws \WendellAdriel\ValidatedDTO\Exceptions\CastTargetException
     * @throws \WendellAdriel\ValidatedDTO\Exceptions\MissingCastTypeException
     */
    public function index(StatsRequest $request): array
    {
        $filters = StatisticsFiltersDto::fromArray($request->validated());
        return $this->statisticsService->getWorldStatistics($filters)->toArray();
    }
}
