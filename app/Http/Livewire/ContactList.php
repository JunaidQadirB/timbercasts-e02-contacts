<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactList extends Component
{
    /**
     * @var Contact[]|\Illuminate\Database\Eloquent\Collection
     */
    protected $contacts;
    public $viewMode;

    public function mount($contacts, $viewMode)
    {
        $this->contacts = $contacts;
        $this->viewMode = $viewMode;
    }

    public function render()
    {
        $view = 'livewire.contact-grid';
        if ($this->viewMode == 'list') {
            $view = 'livewire.contact-list';
        }
        return view($view, ['contacts' => $this->contacts]);
    }
}
