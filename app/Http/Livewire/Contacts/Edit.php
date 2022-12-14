<?php

namespace App\Http\Livewire\Contacts;
use App\Models\Contact;
use Livewire\Component;

class Edit extends Component
{

    public $contactId;
    public $name, $contact_number, $email, $address, $sim_card;
    public function mount() {
        $this->name = $this->contact->name;
        $this->contact_number = $this->contact->contact_number;
        $this->email = $this->contact->email;
        $this->address = $this->contact->address;
        $this->sim_card = $this->contact->sim_card;

    }

    public function editContact() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255'],
            'email'                     =>          ['required', 'string', 'max:255'],
            'contact_number'            =>          ['required', 'string', 'max:255'],
            'address'                   =>          ['required', 'string', 'max:255'],
            'sim_card'                  =>          ['required', 'string', 'max:255']
        ]);

        $this->contact->update([
            'name'                      =>      $this->name,
            'email'                     =>      $this->email,
            'contact_number'            =>      $this->contact_number,
            'address'                   =>      $this->address,
            'sim_card'                  =>      $this->sim_card
        ]);

        return redirect('/contact')->with('message', 'Updated Successfully');
    }

    public function back() {
        return redirect('/contact');
    }
    public function getContactProperty() {
        return Contact::find($this->contactId);
    }

    public function render()
    {
        return view('livewire.contacts.edit');
    }
}
