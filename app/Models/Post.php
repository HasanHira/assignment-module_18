<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [ 'title', 'slug', 'description', 'excerpt', 'category_id'];

    /**
     * Get the category that owns the Post
     *
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
