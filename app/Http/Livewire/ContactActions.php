<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactActions extends Component
{
    public $contactId;
    public $name;

    public function mount($id, $name)
    {
        $this->contactId = $id;
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.contact-actions');
    }
}
