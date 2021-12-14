<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookPostRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{

    /**
     * Get all books.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookResource::collection(Book::paginate());
    }

    /**
     * Create a new book.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookPostRequest $request)
    {   
        $fields = $request->validated();

        $author = Author::findOrFail($fields['author_id']);       

        $book = $author->books()->create($fields);

        return BookResource::make($book);

    }

}
