<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;


class ContactForm extends Component {

    public $name, $email;

    /// Store the data on the database
    public function submit() {
        
        $validateData = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);

        Contact::create($validateData);

        return redirect()->to('/form');

    }

    public function render() {
        return view('livewire.contact-form');
    }

}
