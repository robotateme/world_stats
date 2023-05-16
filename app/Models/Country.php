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
 * @property int $Code
 * @property string $Name
 * @property string $Continent
 * @property string $Region
 * @property string $SurfaceArea
 * @property int|null $IndepYear
 * @property int $Population
 * @property string|null $LifeExpectancy
 * @property string|null $GNP
 * @property string|null $GNPOld
 * @property string $LocalName
 * @property string $GovernmentForm
 * @property string|null $HeadOfState
 * @property int|null $Capital
 * @property string $Code2
 * @method static Builder|Country whereCapital($value)
 * @method static Builder|Country whereCode($value)
 * @method static Builder|Country whereCode2($value)
 * @method static Builder|Country whereContinent($value)
 * @method static Builder|Country whereGNP($value)
 * @method static Builder|Country whereGNPOld($value)
 * @method static Builder|Country whereGovernmentForm($value)
 * @method static Builder|Country whereHeadOfState($value)
 * @method static Builder|Country whereIndepYear($value)
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

    protected $primaryKey = 'Code';
}
