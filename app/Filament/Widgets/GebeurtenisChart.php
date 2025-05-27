<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Gebeurtenis;
use Illuminate\Support\Facades\DB;


class GebeurtenisChart extends ChartWidget
{
    protected static ?string $heading = 'Gebeurtenissen Toegevoegd';

    protected function getData(): array
    {
        $data = DB::table('gebeurtenis')
    ->selectRaw("DATE_FORMAT(created_at, '%m-%d') as date, COUNT(*) as aggregate")
     ->whereBetween('date', [now()->startOfMonth(), now()->endOfMonth()])
    ->groupBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"))
    ->orderBy('date')
    ->get();


        return [
            'datasets' => [
                [
                'label' => 'Gebeurtenissen',
                'data' => $data->map(fn ($value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn ($value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
