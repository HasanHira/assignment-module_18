<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    // Task 10
    public function showPostsByCategoryID($categoryId)
    {
        $categories = Category::with('posts')->where('id', '=', $categoryId)->get();
        return view('pages.category_posts', compact('categories'));
    }

    // Task 11
    public function latestPosts($id)
    {
        $category = Category::findOrFail($id)->LatestPost();
        return $category;
    }

    // Task 12
    public function CategoriesLatestPosts()
      {
          $categories = Category::all();
          return view('pages.categories',compact('categories'));
      }

}
