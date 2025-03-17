<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
    ];

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? url('storage/' . $this->thumbnail) : null;
    }
}