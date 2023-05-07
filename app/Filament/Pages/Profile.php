<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Forms\Components;
use Filament\Forms\Concerns\InteractsWithForms;

class Profile extends Page implements HasForms
{
    use InteractsWithForms,
        WithRateLimiting;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static string $view = 'filament.pages.profile';
    protected static ?string $navigationLabel = 'پروفایل';
    protected static ?string $title = 'پروفایل';
    protected static ?string $slug = 'profile';


    public $data;

    public function mount(): void
    {
        $this->form->fill([
            'name' => auth()->user()->name,
            'username' => auth()->user()->username,
        ]);
    }

    protected function getFormSchema(): array
    {
        return [

            Components\Grid::make(2)->schema(
                [
                    Components\TextInput::make('name')
                        ->label('نام')
                        ->required(),
                    Components\TextInput::make('username')
                        ->label('نام کاربری')
                        ->required()
                        ->unique(ignoreRecord: true),
                    Components\TextInput::make('password')
                        ->label('کلمه عبور')
                        ->minLength(8),
                ]
            ),
        ];
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function submit(): void
    {
        // echo 'hi';
        // abort(500);
    }

}
