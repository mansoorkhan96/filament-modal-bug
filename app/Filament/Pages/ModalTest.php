<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;
use Filament\Support\Enums\Width;

class ModalTest extends Page
{
    protected string $view = 'filament.pages.modal-test';

    public function getHeaderActions(): array
    {
        return [
            Action::make('test')
                ->requiresConfirmation()
                ->modalWidth(Width::ExtraLarge)
                ->extraModalFooterActions([
                    Action::make('child modal')
                        ->label('Open Child Modal')
                        ->requiresConfirmation()
                        ->overlayParentActions(),
                ]),
        ];
    }
}
