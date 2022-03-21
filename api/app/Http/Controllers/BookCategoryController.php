<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Book;

class BookCategoryController extends Controller
{
    public function index()
    {
        
        $categories = Book::pluck('category')->unique();

        return CategoryResource::make($categories);
    }
}
