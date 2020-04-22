<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    /**
     * @var Contact
     */
    protected $contact;

    public $contactId;
    public $first;
    public $last;
    public $email;
    public $number;
    public $numberType;

    public $isEditing = false;

    public function mount(Contact $contact)
    {
        if ($contact && $contact->id) {
            $this->contactId = $contact->id;
            $this->isEditing = true;

            $this->first = $contact->first_name;
            $this->last = $contact->last_name;
            $this->email = $contact->email;
            $this->number = $contact->number;
            $this->numberType = $contact->number_type;
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function save()
    {
        $rules = [
            'first' => 'required',
            'last' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'numberType' => 'required',
        ];

        $messages = [
            'first.required' => 'First name is required.',
            'last.required' => 'Last name is required.',
            'email.required' => 'Email address is required.',
            'email' => 'Email must be a valid email address..',
            'number.required' => 'Phone number is required.',
            'numberType.required' => 'Phone number type is required.',
        ];

        $this->validate($rules, $messages);

        $contact = new Contact();

        if ($this->isEditing) {
            $contact = Contact::find($this->contactId);
        }

        $contact->first_name = $this->first;
        $contact->last_name = $this->last;
        $contact->email = $this->email;
        $contact->number = $this->number;
        $contact->number_type = $this->numberType;

        $contact->save();

        $this->redirect('/');

    }
}
