<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Thiagoprz\CompositeKey\HasCompositeKey;


/**
 * App\Models\CountryLanguage
 *
 * @method static Builder|CountryLanguage newModelQuery()
 * @method static Builder|CountryLanguage newQuery()
 * @method static Builder|CountryLanguage query()
 * @property string $country_code
 * @property string $language
 * @property string $is_official
 * @property string $percentage
 * @method static Builder|CountryLanguage whereCountryCode($value)
 * @method static Builder|CountryLanguage whereIsOfficial($value)
 * @method static Builder|CountryLanguage whereLanguage($value)
 * @method static Builder|CountryLanguage wherePercentage($value)
 * @mixin \Eloquent
 */
class CountryLanguage extends Model
{
    use HasFactory, HasCompositeKey;

    protected $primaryKey = ['country_code', 'language'];

    protected $keyType = 'string';

//    public $incrementing = false;
}
