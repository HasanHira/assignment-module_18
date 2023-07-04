<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Task 5:
    public function allPostsWithCategory()
    {
        $posts = Post::with('category')->get();
        return view('pages.home', compact('posts'));
    }


    // Task 6:
    public function categoryPost($id)
    {
        $postCount = Post::where('category_id', $id)->count();
        return $postCount;
    }

    // Task 7:
    public function softDeletePost($id)
    {
        $softDelete = Post::findOrFail($id)->delete();

        if ($softDelete) {
            return 'successfully soft deleted';
        } else {
            return 'failed to softdelete';
        }
    }

    // Task 8:
    public function deletedData()
    {
        $showSoftData = Post::onlyTrashed()->get();
        return $showSoftData;
    }
}
