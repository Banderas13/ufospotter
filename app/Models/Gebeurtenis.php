<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Gebeurtenis extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'location',
        'observation_time',
        'certainty',
        'date',
        'location_id',
    ];
    
    protected static string $view = 'filament.widgets.gebeurtenis';

    protected function getData(): array
    {
        $lastEvent = Gebeurtenis::latest('created_at')->first();

        if (! $lastEvent) {
            return [
                'timeSinceLastEvent' => 'Geen gebeurtenissen gevonden.',
            ];
        }

        $diffForHumans = Carbon::parse($lastEvent->created_at)->diffForHumans();

        return [
            'timeSinceLastEvent' => $diffForHumans,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
