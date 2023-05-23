<?php

namespace App\Repositories;

use App\DTOs\StatisticsFiltersDto;
use App\Repositories\Contracts\BaseRepository;
use DB;
use Illuminate\Database\Query\Expression;
use Staudenmeir\LaravelCte\Query\Builder;

class StatisticsRepository extends BaseRepository
{
    public function getMainWorldStatistics(StatisticsFiltersDto $filters) : Builder
    {
        $query = new Builder($this->model->getConnection());

        $cte = DB::table($this->model->getTable())
            ->select([
                'continent',
                'region',
                'code',
                'countries.name',
                new Expression('avg(life_expectancy) life_duration'),
                new Expression('count(DISTINCT code) countries'),
                new Expression('count(DISTINCT cities.id) cities'),
                new Expression('sum(DISTINCT cities.population) as population'),
                new Expression('count(DISTINCT language) languages'),
            ])
            ->join('cities', 'code', '=', 'country_code')
            ->join('country_languages', 'code', '=', 'country_languages.country_code')
            ->groupBy(['continent', 'region', 'code'])
        ;

        $query->select([
                'continent',
                'region',
                new Expression('ROUND(AVG(life_duration), 2) as life_duration'),
                new Expression('SUM(countries) as countries'),
                new Expression('SUM(cities) as cities'),
                new Expression('SUM(population) as population'),
                new Expression('SUM(languages) as languages'),
            ])
            ->from('cte')
            ->withExpression('cte', $cte)
            ->groupBy(['continent', 'region'])
            ->orderBy('population', 'desc')
        ;

        return $query;
    }

}