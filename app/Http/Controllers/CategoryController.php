<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index() : View
    {
        return view("categories.index");
    }

    public function getSelectCategoryOptions(CategoryRequest $request) : JsonResponse {
        $categories = Category::where("parent_id",$request->get("parent_id"));

        if (!empty($request->search) && $request->search != "") {
            $categories->where("name","LIKE","%".$request->search . "%");
        }

       $categories = $categories->paginate();

       return response()->json($categories);
    }
}
