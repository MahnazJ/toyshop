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
        //
         DB::table('products')->insert([

            'name' =>('plush mushroom'),
            'price' =>('22.99'),
            'sale_price' => (true),
            'file_name'=> ('shroom.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'description' => ('plush mushroom'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('angry Duck'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('chickknife.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'description' => ('yellow plush duckling'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('green dragon'),
            'price' =>('24.99'),
            'sale_price' => (false),
            'file_name'=> ('greendragon.png'),
            'color' =>('green'),
            'stock' => ('100'),
            'description' => ('green dragon'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('lion puzzle'),
            'price' =>('23.99'),
            'sale_price' => (false),
            'file_name'=> ('lionpuzzle.png'),
            'color' =>('tan'),
            'stock' => ('100'),
            'description' => ('lion puzzle'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('plush cheese'),
            'price' =>('27.99'),
            'sale_price' => (false),
            'file_name'=> ('cheese.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'description' => ('plush cheese'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('musical toy'),
            'price' =>('21.99'),
            'sale_price' => (false),
            'file_name'=> ('musicaltoy.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'description' => ('musical toy'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('plush elephant'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('plushelephant.png'),
            'color' =>('grey'),
            'stock' => ('100'),
            'description' => ('plush elephant'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('plush tiger'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('tiger.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'description' => ('plush tiger'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('teething keys'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('teethingkeys.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'description' => ('teething keys'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('wooden bear clock'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('woodenbearclock.png'),
            'color' =>('tan'),
            'stock' => ('100'),
            'description' => ('wooden bear clock'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('sloth blanket'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('slothblanket.png'),
            'color' =>('grey'),
            'stock' => ('100'),
            'description' => ('sloth blanket'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('plush cow'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('plushcow.png'),
            'color' =>('black-and-white'),
            'stock' => ('100'),
            'description' => ('plush cow'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('puzzle mat'),
            'price' =>('27.99'),
            'sale_price' => (false),
            'file_name'=> ('puzzlemat.png'),
            'color' =>('?'),
            'stock' => ('100'),
            'description' => ('puzzle mat'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);



        DB::table('products')->insert([

            'name' =>('plush coffee'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('coffee.png'),
            'color' =>('tan'),
            'stock' => ('100'),
            'description' => ('plush coffee'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('plush cauliflower'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('cauliflower.png'),
            'color' =>('green-white'),
            'stock' => ('100'),
            'description' => ('cauliflower'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

            'name' =>('grogu backpack'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('grogubackpack.png'),
            'color' =>('green'),
            'stock' => ('100'),
            'description' => ('grogu backpack'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('grogu'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('grogu.png'),
            'color' =>('green'),
            'stock' => ('100'),
            'description' => ('grogu toy'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('plush polarbear'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('polarbear.png'),
            'color' =>('white'),
            'stock' => ('100'),
            'description' => ('Yplush polarbear'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('pooh blanket'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('poohblanket.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'description' => ('pooh blanket'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

            'name' =>('black plush bat'),
            'price' =>('22.99'),
            'sale_price' => (false),
            'file_name'=> ('blackbat.png'),
            'color' =>('black'),
            'stock' => ('100'),
            'description' => ('black plush bat'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

  

    }
}