<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\customert;
use Livewire\WithPagination;
use App\Models\foods;
use App\Models\beverages;
use App\Models\Post;

class AddToCartComponent extends Component
{
    protected $name,$address,$email,$note;
    public function CustomerD($name,$address,$email,$note){
 
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
 
    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required|name',
            'address' => 'required',
            'email' => 'required|email|unique:customerts',
            'note' => 'required',
        ]);}
 
        public $slug;
     public function mount($slug){
       
         $this->slug=$slug;
       
     }
     use WithPagination;
     public function render()
     {
        // $foods=foods::paginate(6);
         $foods=foods::where('slug',$this->slug)->first();
         $beverages=beverages::where('slug',$this->slug)->first();
         $Post=Post::where('slug',$this->slug)->first();
         return view('livewire.add-to-cart-component',['foods'=>$foods],['beverages'=>$beverages],['Post'=>$Post]);
     }
 
 
}