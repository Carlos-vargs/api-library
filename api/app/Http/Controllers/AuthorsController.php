<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorPostRequest;
use App\Models\Authors;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Authors::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorPostRequest $request)
    {

        $fields = $request->validated();

        $author = Authors::create($fields);

        $response = [
            'author' => $author,
            'message' => 'a new author has been added',
        ];

        return response($response, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Authors::find($id);

        $response = [
            'author' => $author->books()->get(),
        ];

        return response($response, 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Authors $authors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authors $authors)
    {
        //
    }
}
