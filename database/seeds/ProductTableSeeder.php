<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/seed/data.json");
        $data = json_decode($json);
        foreach($data as $obj){
            // Product::create([
            //     'name' => ''
            // ]);
        }
    }
}
