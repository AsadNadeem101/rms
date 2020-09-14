<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $product = new Product;
        $product->name='kameez';
        $product->base_image='kameez.PNG';
        $product->price=100;
        $product->description="This is product kameez";
        $product->category_id=1;
        $product->save();

        $product = new Product;
        $product->name='anarkali';
        $product->base_image='anarkali.PNG';
        $product->price=100;
        $product->description="This is product anarkali";
        $product->category_id=1;
        $product->save();

        $product = new Product;
        $product->name='dress';
        $product->base_image='Dress.PNG';
        $product->price=100;
        $product->description="This is product dress";
        $product->category_id=2;
        $product->save();

        $product = new Product;
        $product->name='wrap_round';
        $product->base_image='wrap round.PNG';
        $product->price=100;
        $product->description="This is product wrap round";
        $product->category_id=2;
        $product->save();
    }
}
