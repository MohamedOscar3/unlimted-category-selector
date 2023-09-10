<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $count = 5;
        //Seed main categories
        try {

            for ($i = 1; $i <= $count;$i++) {
                 $category = (new Category())->create(["name"=>"Category ".$i ,"parent_id" => NULL]);
                 $this->addCategoriesToParent($category,$count);
            }

        } catch (\Exception $e) {

        }


    }

    private function addCategoriesToParent($parent,$count,$levels = 3) {
        if ($levels < 0) {
            return;
        }


        for ($i = 1; $i <= $count;$i++) {
             $category = (new Category())->create(["name"=>"Sub Category ".$parent->id . "(".$i .")" ,"parent_id" => $parent->id]);
             $this->addCategoriesToParent($category,$count,$levels - 1);
        }




    }
}
