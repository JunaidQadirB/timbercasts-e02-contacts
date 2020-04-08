<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactListItem extends Component
{
    /**
     * @var Contact
     */
    public $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.contact-list-item');
    }
}
