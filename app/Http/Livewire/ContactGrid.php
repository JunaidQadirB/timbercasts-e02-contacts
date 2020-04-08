<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactGrid extends Component
{
    /**
     * @var Contact[]|\Illuminate\Database\Eloquent\Collection
     */
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.contact-grid');
    }
}