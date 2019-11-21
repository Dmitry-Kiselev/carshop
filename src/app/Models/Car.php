<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Car
 *
 * @property int $id
 * @property int $color_id
 * @property int $manufacturer_id
 * @property string $model
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Color $color
 * @property-read \App\Models\Manufacturer $manufacturer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Car extends Model
{
    protected $fillable = [
        'manufacturer_id',
        'color_id',
        'model',
        'price'
    ];

    protected $casts = [
        'manufacturer_id' => 'int',
        'color_id' => 'int',
        'price' => 'float'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
