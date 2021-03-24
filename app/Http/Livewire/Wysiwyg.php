<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Wysiwyg extends Component
{
    public $body = '';

    public function render()
    {
        return view('livewire.wysiwyg');
    }
}
