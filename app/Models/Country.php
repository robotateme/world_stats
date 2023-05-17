<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Country
 *
 * @method static Builder|Country newModelQuery()
 * @method static Builder|Country newQuery()
 * @method static Builder|Country query()
 * @property string $code
 * @property string $name
 * @property string $continent
 * @property string $region
 * @property string $surface_area
 * @property int|null $independence_year
 * @property int $population
 * @property string|null $life_expectancy
 * @property string|null $gnp
 * @property string|null $gnp_old
 * @property string $local_name
 * @property string $government_form
 * @property string|null $head_of_state
 * @property int|null $capital
 * @property string $code2
 * @method static Builder|Country whereCapital($value)
 * @method static Builder|Country whereCode($value)
 * @method static Builder|Country whereCode2($value)
 * @method static Builder|Country whereContinent($value)
 * @method static Builder|Country whereGnp($value)
 * @method static Builder|Country whereGnpOld($value)
 * @method static Builder|Country whereGovernmentForm($value)
 * @method static Builder|Country whereHeadOfState($value)
 * @method static Builder|Country whereIndependenceYear($value)
 * @method static Builder|Country whereLifeExpectancy($value)
 * @method static Builder|Country whereLocalName($value)
 * @method static Builder|Country whereName($value)
 * @method static Builder|Country wherePopulation($value)
 * @method static Builder|Country whereRegion($value)
 * @method static Builder|Country whereSurfaceArea($value)
 * @mixin \Eloquent
 */
class Country extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $keyType = 'string';

}
