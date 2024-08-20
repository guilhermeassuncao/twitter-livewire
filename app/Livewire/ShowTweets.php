<?php

namespace App\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'Teste';

    public function render()
    {
        return view('livewire.show-tweets');
    }
}
