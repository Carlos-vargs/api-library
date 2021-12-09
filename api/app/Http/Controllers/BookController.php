<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookPostRequest;
use App\Http\Resources\BookResource;
use App\Models\Author;
use App\Models\Book;
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
    public function create(BookPostRequest $request)
    {
        $fields = $request->validated();

        $author = Author::create([
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'nationality' => $fields['nationality'],
        ]);

        $book = $author->books()->create([
            'title' => $fields['title'],
            'category' => $fields['category'],
            'group' => $fields['group'],
            'cover_url' => $fields['cover_url'],
            'author_id' => $author->id,
            'language' => $fields['language'],
            'year' => $fields['year'],
            'description' => $fields['description'],
        ]);

        // if ($fields['author_id']) {

        //     $author = Author::findOrFail($fields['author_id']);

        //     $book = $author->books()->create([
        //         'title' => $fields['title'],
        //         'category' => $fields['category'],
        //         'group' => $fields['group'],
        //         'author_id' => $fields['author_id'],
        //         'cover_url' => $fields['cover_url'],
        //         'language' => $fields['language'],
        //         'year' => $fields['year'],
        //         'description' => $fields['description'],
        //     ]);

        //     $response = [
        //         'book' => $book,
        //         'message' => 'a new book has been added',
        //     ];

        //     return response($response, 201);

        // };

        $response = [
            'book' => $book,
            'message' => 'a new book has been added',
        ];

        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return BookResource::make($book);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
