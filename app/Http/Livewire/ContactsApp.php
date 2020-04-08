<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactsApp extends Component
{
    public $viewMode = 'grid';

    public function render()
    {
        return view('livewire.contacts-app');
    }

    public function toggleView($mode)
    {
        $this->viewMode = $mode;
    }
}
