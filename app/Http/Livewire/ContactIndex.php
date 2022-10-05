<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public function render()
    {
        $contacts = Contact::latest()->get();
        return view('livewire.contact-index', compact('contacts'));
    }
}
