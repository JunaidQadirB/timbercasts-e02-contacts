<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactsApp extends Component
{
    protected $contacts;
    public $viewMode = 'grid';
    public $searchQuery;
    public $search;
    /**
     * @var int
     */
    public $viewKey;

    public function render()
    {
        return view('livewire.contacts-app', ['contacts' => $this->getContacts($this->search)]);
    }

    public function toggleView($mode)
    {
        $this->viewMode = $mode;
    }

    public function getContacts($query = null)
    {
        if (trim($query) == '') {
            return Contact::paginate(5);
        }
        return Contact::where('first_name', 'like', "%{$query}%")
            ->orWhere('last_name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->orWhere('number', 'like', "%{$query}%")
            ->paginate(5);
    }

    public function search()
    {
        $this->search = $this->searchQuery;
        $this->viewKey = time();
    }

}
