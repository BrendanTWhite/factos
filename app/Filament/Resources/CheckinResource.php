<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CheckinResource\Pages;
use App\Filament\Resources\CheckinResource\RelationManagers;
use App\Models\Checkin;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CheckinResource extends Resource
{
    protected static ?string $model = Checkin::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Components\Select::make('type')
                    ->options([
                        'real_time' => 'Now',
                        'end_of_day' => 'Earlier',
                        'no_travel_today' => 'No Travel Today',
                    ])
                    ->required()
                    ->default('real_time'),

                Components\Select::make('location_id')
                    ->relationship('location', 'description')
                    ->preload()
                    ->autofocus()
                    ->required(),

                Components\DateTimePicker::make('checkin_at')
                    ->default(Carbon::now())
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sequence'),
                Tables\Columns\TextColumn::make('checkin_at')
                    ->since()->sortable()->label('When'),
                Tables\Columns\TextColumn::make('location.description'),
            ])
            ->defaultSort('checkin_at','desc')
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageHistories::route('/'),
        ];
    }    
}
