<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    public function scopeSearch($query, string $terms = null)
    {
        $terms = \trim($terms);
        collect(\explode(' ', $terms))->filter()->each(function ($term) use ($query) {
            $terms = '%'.$term.'%';
            $query->where(function ($query) use ($terms) {
                $query->where('content', 'like', $terms)
                    ->orWhere('title', 'like', $terms)
                    ->orWhereIn('user_id', User::query()
                    ->where('name', 'like', $terms)
                    ->get()->pluck('id')
                    );
            });

        });
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

}
