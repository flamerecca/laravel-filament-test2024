<?php

namespace App\Livewire;

use App\Models\Owner;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Livewire\Component;

class ViewProduct extends Component implements HasForms, HasInfolists
{
    use InteractsWithInfolists;
    use InteractsWithForms;

    public $owner;

    public function render()
    {
        return view('livewire.view-product');
    }

    public function productInfolist(Infolist $infolist): Infolist
    {
        $this->owner = Owner::first();
        return $infolist
            ->record($this->owner)
            ->schema([

                // ...
            ]);
    }
}
