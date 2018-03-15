<?php

use Illuminate\Database\Seeder;
use App\Models\Variant;

class VariantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach (range(1, 5) as $index) {
        Variant::insert([
          'variant_id'=> random_int(1,10),
          'product_id'=> random_int(4,12),
          'product_title'=>str_random(10),
          'title'=>str_random(12),
          'price'=>random_int(700, 1400),
          'inventory_quantity'=>(7),
          'sku'=>('SID007')
        ]);
      }

    }
}
