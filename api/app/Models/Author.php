<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'nationality',
    ];

/**
 * The books that belong to the Authors
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
    public function books()
    {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }

}
