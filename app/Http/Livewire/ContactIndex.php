<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    protected $listeners = ['contactStored' => 'handleStored', 'contactUpdated' => 'handleUpdated'];

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

    public function destroy($id)
    {
        if ($id) {
            $data = Contact::findOrFail($id);
            $data->delete();

            session()->flash('message', "Contact deleted succesfully!");
        }
    }

    public function handleStored($contact)
    {
        session()->flash('message', "Contact {$contact['name']} created succesfully!");
    }

    public function handleUpdated($contact)
    {
        session()->flash('message', "Contact {$contact['name']} updated succesfully!");
    }
}
