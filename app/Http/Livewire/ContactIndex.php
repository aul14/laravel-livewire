<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    protected $listeners = ['contactStored' => 'handleStored'];

    public $statusUpdate = false;

    public function render()
    {
        $contacts = Contact::latest()->get();
        return view('livewire.contact-index', compact('contacts'));
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::findOrFail($id);
        $this->emit('getContact', $contact);
    }

    public function handleStored($contact)
    {
        session()->flash('message', "Contact {$contact['name']} created succesfully!");
    }
}
