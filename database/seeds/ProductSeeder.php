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
        DB::table('products')->insert([
            'name' => 'Clio',
            'description' => 'Este es un primer auto',
            'category_id' => 1,
        ]);
    }
}
