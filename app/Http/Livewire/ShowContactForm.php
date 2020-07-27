<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ShowContactForm extends Component {

    public $name, $email, $contacts;

    public function delete($id){
        if($id) {
            Contact::where('id', $id)->delete();
        }
    }

    public function render() {
        $this->contacts = Contact::all();
        return view('livewire.show-contact-form');
    }

}
