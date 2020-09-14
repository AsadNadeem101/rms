<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=new Category;
        $category->name='Eastern';
        $category->description='This is eastern clothes category';
        $category->save();

        $category=new Category;
        $category->name='Western';
        $category->description='This is western clothes category';
        $category->save();

    }
}
