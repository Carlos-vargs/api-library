<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'category',
        'group',
        'author_id',
        'cover_url',
        'first_name',
        'last_name',
        'nationality',
        'language',
        'year',
        'description',
    ];

    /**
     * The authors that belong to the Books
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authors()
    {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }

}
