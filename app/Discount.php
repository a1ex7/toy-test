<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ['value'];

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }
}
