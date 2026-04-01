<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;

/**
 * @property-read Schema $content
 */
class TestWizard extends Page
{
    protected static ?string $title = "Test Wizard";

    protected static string|BackedEnum|null $navigationIcon = "heroicon-o-beaker";

    /** @var array<string, mixed> */
    public array $data = [];

    public function mount(): void
    {
        $this->content->fill();
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make("Order")->schema([
                        // ...
                    ]),
                    Step::make("Delivery")->schema([
                        // ...
                    ]),
                    Step::make("Billing")->schema([
                        // ...
                    ]),
                ]),
            ])
            ->statePath("data");
    }
}
