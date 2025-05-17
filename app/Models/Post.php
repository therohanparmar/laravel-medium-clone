<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'user_id',
        'category_id',
        'published_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
