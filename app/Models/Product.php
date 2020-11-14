<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use InvalidArgumentException;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'imgurl',
        'price',
        'discountPercent',
        'discountStart_at',
        'discountEnd_at'
    ];

    protected $dates = ['created_at', 'updated_at', 'discountStart_at', 'discountEnd_at',];

    // phpcs:ignore
    public static function NewProducts()
    {
        return Product::WhereDateBetween("updated_at", now(), "updated_at", now()->addWeek());
    }

    // phpcs:ignore
    public static function Offerings()
    {
        $sNow = now();
        return Product::WhereDateBetween("discountEnd_at", $sNow, "discountStart_at", $sNow);
    }

    public function hasDiscount()
    {
        return $this->discountPercent && now()->isBetween($this->discountEnd_at, $this->discountStart_at);
    }

    /**
     *
     * @param Builder $query
     * @param string $sFieldNameFrom
     * @param DateTimeInterface $fromDate
     * @param string $sFieldNameTo
     * @param DateTimeInterface $toDate
     * @return Builder
     * @throws InvalidArgumentException
     */
    public function scopeWhereDateBetween($query, $sFieldNameFrom, $fromDate, $sFieldNameTo, $toDate)
    {
        return $query->whereDate($sFieldNameFrom, '>=', $fromDate)->whereDate($sFieldNameTo, '<=', $toDate);
    }
}
