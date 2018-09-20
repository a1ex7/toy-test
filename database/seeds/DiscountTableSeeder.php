<?php

use Illuminate\Database\Seeder;

class DiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('discounts')->get()->count() === 0) {
            DB::table('discounts')->insert([
                ['value' => 10],
                ['value' => 15],
                ['value' => 20],
                ['value' => 25]
            ]);
        } else {
            echo "\e[31mTable Discounts is not empty\n";
        }
    }
}
