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

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile';

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
                        ->required(),
                    Components\TextInput::make('username')
                        ->required()
                        ->unique(ignoreRecord: true),
                    Components\TextInput::make('password')
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
