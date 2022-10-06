<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    // public $contacts;

    // public function mount($contacts)
    // {
    //     $this->contacts = $contacts;
    // }

    public $name, $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
        $contact = Contact::create([
            'name'  => $this->name,
            'phone' => $this->phone
        ]);

        $this->resetInput();

        $this->emit('contactStored', $contact);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}
