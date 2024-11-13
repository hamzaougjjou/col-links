<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Link extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'path', 'original_url', 'clicks' , "title" , "image_id"];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user associated with the Link
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
    }
