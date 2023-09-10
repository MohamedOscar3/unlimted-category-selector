<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $count = 10;
        //Seed main categories
        try {
            $categories = [];
            for ($i = 1; $i <= $count;$i++) {
                $categories[] = (new Category())->create(["name"=>"Category ".$i ,"parent_id" => NULL]);
            }
            $this->addCategoriesToParent($categories,$count);
        } catch (\Exception $e) {

        }


    }

    private function addCategoriesToParent($categories,$count,$levels = 3) {
        if ($levels < 0) {
            return;
        }

        foreach ($categories as $category) {
            $categoriesChild = [];
            for ($i = 1; $i <= $count;$i++) {
                $categoriesChild[] = (new Category())->create(["name"=>"Sub Category ".$category->id . "(".$i .")" ,"parent_id" => $category->id]);
            }

            $this->addCategoriesToParent($categoriesChild,$count,$levels - 1);

        }
    }
}
