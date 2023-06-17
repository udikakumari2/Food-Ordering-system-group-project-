<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\foods;

use Cart;

class DetailsComponent extends Component

{
    public $slug;
    public function mount($slug){
        $this->slug=$slug;
    }
    public function store($product_id,$product_name,$product_price){
       
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\foods');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('addtocart',['slug'=>$this->slug]);
      }

    public function render()
    {
        
        $foods=foods::where('slug',$this->slug)->first();
       
        //dd( $foods);
        return view('livewire.details-component',['foods'=>$foods]);
        
    }
}
