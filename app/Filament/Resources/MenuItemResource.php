<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuItemResource\Pages;
use App\Filament\Resources\MenuItemResource\RelationManagers;
use App\Models\MenuCategory;
use App\Models\MenuItem;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;

class MenuItemResource extends Resource
{
    protected static ?string $model = MenuItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'منو';
    protected static ?string $label = 'آیتم';
    protected static ?string $pluralLabel = 'آیتم ها';

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

                // Forms\Components\TextInput::make('image_path')
                //     ->label('image')
                //     ->maxLength(255),

                // Forms\Components\FileUpload::make('image_path')
                Forms\Components\FileUpload::make('image_path')
                    ->label('عکس')
                    ->disableLabel()
                    ->image(),

                Forms\Components\TextInput::make('price')
                    ->label('قیمت')
                    ->required()
                    ->integer()
                    ->minValue(0)
                    ->numeric()
                    ->mask(
                        fn (TextInput\Mask $mask) => $mask
                            ->numeric()
                            ->integer() // Disallow decimal numbers.
                            ->minValue(0) // Set the minimum value that the number can be.
                            ->maxValue(2_000_000_000) // Set the maximum value that the number can be.
                            ->normalizeZeros() // Append or remove zeros at the end of the number.
                            ->padFractionalZeros() // Pad zeros at the end of the number to always maintain the maximum number of decimal places.
                            ->thousandsSeparator(','), // Add a separator for thousands.
                    ),

                Forms\Components\Select::make('menu_category_id')
                    ->label('دسته بندی')
                    ->required()
                    ->options(MenuCategory::where('is_active', true)
                        ->get()
                        ->pluck('name', 'id'))
                    ->searchable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('عکس'),

                Tables\Columns\TextColumn::make('name')
                    ->label('نام')
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('توضیحات')
                    ->limit(50)
                    ->toggleable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('قیمت')
                    ->searchable(),

                Tables\Columns\TextColumn::make('menuCategory.name')
                    ->label('دسته بندی')
                    ->toggleable(),


            ])
            ->filters([
                SelectFilter::make('menuCategory')
                    ->label('دسته بندی')
                    ->relationship('menuCategory', 'name'),
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
            'index' => Pages\ListMenuItems::route('/'),
            'create' => Pages\CreateMenuItem::route('/create'),
            'edit' => Pages\EditMenuItem::route('/{record}/edit'),
        ];
    }
}
