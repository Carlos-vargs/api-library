<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookPostRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\Author;
class BookController extends Controller
{

    /**
     * Get all books.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookResource::collection(Book::all());
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
