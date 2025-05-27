<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'gebeurtenis_id',
        'path',
    ];

    public function gebeurtenis()
    {
        return $this->belongsTo(Gebeurtenis::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
