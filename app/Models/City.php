<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\City
 *
 * @method static Builder|City newModelQuery()
 * @method static Builder|City newQuery()
 * @method static Builder|City query()
 * @property int $ID
 * @property string $Name
 * @property string $CountryCode
 * @property string $District
 * @property int $Population
 * @method static Builder|City whereCountryCode($value)
 * @method static Builder|City whereDistrict($value)
 * @method static Builder|City whereID($value)
 * @method static Builder|City whereName($value)
 * @method static Builder|City wherePopulation($value)
 * @mixin \Eloquent
 */
class City extends Model
{
    use HasFactory;
}
