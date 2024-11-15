<?php

namespace App\Livewire\Components\Compose;

use App\Livewire\Forms\TweetComposeForm;
use Livewire\Component;

class Compose extends Component
{
    public TweetComposeForm $form;
    public function render()
    {
        return view('livewire.components.compose.compose');
    }
}
