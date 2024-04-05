<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label_id',
    ];

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}
