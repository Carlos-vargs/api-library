<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorPostRequest;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    /**
     * Get all authors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AuthorResource::collection(Author::all());
    }

    /**
     * Create a new author.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorPostRequest $request)
    {
        $fields = $request->validated();

        // $this->authorize('store', $fields['first_name']);

        $author = Author::create($fields);

        return AuthorResource::make($author);

    }

}
