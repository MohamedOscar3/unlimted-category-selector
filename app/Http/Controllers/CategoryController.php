<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view("categories.index");
    }

    public function getSelectCategoryOptions(Request $request) {
        $categories = Category::where("parent_id",$request->parent_id);

        if (!empty($request->search) && $request->search != "") {
            $categories->where("name","LIKE","%".$request->search . "%");
        }

       $categories = $categories->paginate();

       return response()->json($categories);
    }
}
