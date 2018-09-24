<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'active'];

    public function vouchers()
    {
        return $this->belongsToMany(Voucher::class);
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
