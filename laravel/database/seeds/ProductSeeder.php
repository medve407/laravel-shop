<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 new product.
        for($i=0;$i<10;$i++){
            $newProduct = new \App\Product([
                'title'            => 'product Title'.$i,
                'price'            => 'product Price'.$i,
                'shortDescription' => 'product Description'.$i,
                'longDescription'  => 'product Long'.$i,
                'images'           => 'imagePath'.$i
            ]);
            // Save the new object to the database.
            $newProduct->save();
        }
    }
}
