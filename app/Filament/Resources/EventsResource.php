<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventsResource\Pages;
use App\Filament\Resources\EventsResource\RelationManagers;
use App\Models\Gebeurtenis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Event;
use App\Models\Location;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
class EventsResource extends Resource
{
    protected static ?string $model = Gebeurtenis::class;

    protected static ?string $label = 'Gebeurtenis';
    protected static ?string $pluralLabel = 'Gebeurtenissen';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                ->label('Gebruiker')
                    ->relationship('user', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('title')
                    ->label('Titel')
                    ->required()
                    ->maxLength(25),
                    Select::make('location')
                ->label('Locatie')
                ->relationship('location', 'name')
                ->searchable()
                ->preload()
                ->required()
                ->createOptionForm([
                TextInput::make('name')
                    ->required()
                    ->label('Naam van locatie'),
                ])
                ->createOptionUsing(function (array $data) {
                
                return Location::create([
                    'name' => $data['name'], 
                ])->getKey();
    }),
                    Forms\Components\DatePicker::make('date')
                    ->label('Datum')
                    ->required()
                    ->maxDate(now()),

                    Forms\Components\TextInput::make('observation_time')
                    ->label('Duur van de waarneming')
                    ->numeric()
                    ->minValue(1)
                    ->required(),

                    Forms\Components\TextInput::make('certainty')
                    ->label('Zekerheid')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(10)
                    ->required(),

                    Forms\Components\Textarea::make('description')
                    ->label('Beschrijving')
                    ->required()
                    ->maxLength(65535),
                    
                    FileUpload::make('path')
                    ->label('Afbeelding')
                    ->image()
                    ->maxSize(1024) 
                    ->acceptedFileTypes(['image/*'])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Gebruiker')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Titel')
                    ->searchable()
                    ->limit(25),
                Tables\Columns\TextColumn::make('location.name')
                    ->label('Locatie')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('observation_time')
                    ->label('Duur van de waarneming (minuten)')
                    ->sortable(),
                Tables\Columns\TextColumn::make('certainty')
                    ->label('Zekerheid (1-10)')
                    ->sortable(),

                Tables\Columns\TextColumn::make('date')
                    ->label('Datum')
                    ->date('d/m/Y')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('user_id')
                    ->label('Gebruiker')
                    ->relationship('user', 'name'),
                Tables\Filters\SelectFilter::make('location_id')
                    ->label('Locatie')
                    ->relationship('location', 'name'),
    
    
                Tables\Filters\SelectFilter::make('certainty')
                    ->label('Zekerheid')
                    ->options([
                        'low' => 'Laag (1-3)',
                        'medium' => 'Gemiddeld (4-6)', 
                        'high' => 'Hoog (7-8)',
                        'very_high' => 'Zeer hoog (9-10)'
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['value'],
                            function (Builder $query, $value): Builder {
                                return match ($value) {
                                    'low' => $query->whereBetween('certainty', [1, 3]),
                                    'medium' => $query->whereBetween('certainty', [4, 6]),
                                    'high' => $query->whereBetween('certainty', [7, 8]),
                                    'very_high' => $query->whereBetween('certainty', [9, 10]),
                                    default => $query,
                                };
                            }
                        );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvents::route('/create'),
            'edit' => Pages\EditEvents::route('/{record}/edit'),
        ];
    }
}
