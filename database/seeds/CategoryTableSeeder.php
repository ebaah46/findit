<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
         * Creating Seeders for the various categories that exist in the services
         *
        */
        $agric = new Category();
        $agric->name = 'Agriculture';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Education';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Engineering';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'IT';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Media';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Events';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Sports';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Security';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Finance';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Health';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();

        $agric = new Category();
        $agric->name = 'Housing';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();


        $agric = new Category();
        $agric->name = 'Artisanry';
        $agric->description = 'Any service to be provided in this field';
        $agric->save();
    }
}
