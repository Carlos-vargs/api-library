<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Book;
use Illuminate\Http\Response;

class BookCategoryController extends Controller
{
    public function index()
    {

        $categories = DB::table('books')->select('category')->get();

        $response = [
            'data' => $categories,
        ];

        return response($response, 200);
    }
}
