<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use App\Models\Book;

class SearchBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->query();

        $text = $params['filter'];

        $result = Book::where('category', 'like', '%' . $text . '%')
            ->orWhere('title', 'like', '%' . $text . '%')
            ->orWhere('group', 'like', '%' . $text . '%')
            ->get();

        return BookResource::collection($result);
    }

}
