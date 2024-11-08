<?php

namespace App\Livewire\Pages;

use Illuminate\View\View;
use Livewire\Component;


class Home extends Component
{
    #[layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.pages.home');
    }
}
