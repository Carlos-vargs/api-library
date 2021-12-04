<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        // 'author_first_name',
        // 'author_last_name',
        // 'author_nationality',
        'title',
        'category',
        'group',
        'author_id',
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
        return $this->belongsToMany(Authors::class, 'author_book', 'book_id', 'author_id')->withTimestamps();
    }

}
