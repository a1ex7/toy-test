<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['start_date', 'end_date', 'active'];

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
