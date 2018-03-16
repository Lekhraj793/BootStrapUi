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
      for($i=0; $i<=10; $i++)
        {
          $sku= str_random(10);
          $inventory_quantity= rand(12,45);

          for($j=0; $j<=5; $j++)
          {
            Variant::insert(array('variant_id'=> rand(1,10),
                  'product_id'=> rand(4,12),
                  'product_title'=>str_random(10),
                  'title'=>str_random(12),
                  'price'=>rand(700, 1400),
                  'inventory_quantity'=>$inventory_quantity,
                  'sku'=>$sku));
          }
        }
    }
}
