<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Widget;
use App\Models\Gebeurtenis;
use App\Filament\Resources\GebeurtenisResource;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget;


class GebeurtenisOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $lastEvent = Gebeurtenis::latest('created_at')->first();

        if (! $lastEvent) {
            return [
                Stat::make('Laatste Gebeurtenis', 0)
                    ->description('Geen gebeurtenissen gevonden.'),
            ];
        }

        $diffInMinutes = Carbon::parse($lastEvent->created_at)->diffInMinutes(now());

        
        if ($diffInMinutes < 60) {
        $value = (int) $diffInMinutes;
        $unit = 'minuten';
    } elseif ($diffInMinutes < 1440) { 
        $value = (int) floor($diffInMinutes / 60);
        $unit = 'uur';
    } else {
        $value = (int) floor($diffInMinutes / 1440);
        $unit = 'dagen';
    }

        return [
            Stat::make('Gebeurtenissen', fn () => Gebeurtenis::count()),
            Stat::make('Laatste Gebeurtenis', $value)
                ->description($unit . ' geleden'),
        ];
    }
}

