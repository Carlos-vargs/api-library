<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use App\Models\Book;


class BookFilterByCategory extends Controller
{
    /**
     * Filter books by category.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->query();

        $text = $params['filter'];

        $result = Book::where('category', "=", $text)
            ->get();

        return BookResource::collection($result);
    }
}
