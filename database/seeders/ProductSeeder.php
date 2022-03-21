<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
   
        DB::table('products')->insert([

            'name' =>('plush mushroom'),
              'description' => ('plush mushroom'),
                'price' => ('22.99'),
              'sale_price' => (true),
              'file_name'=> ('shroom.png'),
              'color' =>('white and pink'),
              'stock' => ('100'),
              'details' => ('plush mushroom'),
              'created_at' => now()->format('Y-m-d H:i:s')
          ]);
  

    }
}



