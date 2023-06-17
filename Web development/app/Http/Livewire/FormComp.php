<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormComp extends Component
{
    protected $name, $address, $email, $note;

    public function updated($fields)
    {
        
        $this->validateOnly($fields, [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:customerts',
            'note' => 'required',
        ]);
    }
    public function CustomerD()
    {
    $this->validate([
        'name' => 'required',
        'address' => 'required',
        'email' => 'required|email|unique:customerts',
        'note' => 'required',
    ]);


    $customerts = new customerts();


    $customerts->name = $this->name;
    $customerts->address = $this->address;
    $customerts->email = $this->email;
    $customerts->note = $this->note;


    $customerts->save();


    session()->flash('message','Student has been added successfully');


    $this->name = '';
    $this->address = '';
    $this->email = '';
    $this->note = ''; 
}
    public function render()
    {
        return view('livewire.form-comp');
    }
}
