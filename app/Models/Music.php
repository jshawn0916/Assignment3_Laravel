<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Music extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'artist',
        'album_title',
        'genre',
        'release_date',
        'length',
        'album_cover',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
