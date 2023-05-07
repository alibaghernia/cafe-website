<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use App\Models\Weekday;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $label = 'ایونت';
    protected static ?string $pluralLabel = 'ایونت ها';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Forms\Components\TextInput::make('name')
                    ->label('نام')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->label('توضیحات')
                    ->maxLength(65535),

                Forms\Components\Select::make('weekday_id')
                    ->label('روز هفته')
                    ->options(Weekday::all()
                        ->pluck('name', 'id'))
                    ->required(),

                Forms\Components\TimePicker::make('start')
                    ->label('ساعت شروع')
                    ->withoutSeconds()
                    ->required(),

                Forms\Components\TimePicker::make('end')
                    ->label('ساعت پایان')
                    ->withoutSeconds(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('نام')
                    ->searchable(),
                Tables\Columns\TextColumn::make('weekday.name')
                    ->label('روز هفته'),
                Tables\Columns\TextColumn::make('start')
                    ->label('ساعت شروع')
                    ->time('H:i'),
                Tables\Columns\TextColumn::make('end')
                    ->label('ساعت پایان')
                    ->time('H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
