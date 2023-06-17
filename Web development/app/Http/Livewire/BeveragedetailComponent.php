<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\beverages;
use Cart;
class BeveragedetailComponent extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug=$slug;
    }
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\beverages');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('addtocart',['slug'=>$this->slug]);
      }
    public function render()
    {
       
        $beverages=beverages::where('slug',$this->slug)->first();
       
        //dd( $beverages);
        return view('livewire.beveragedetail-component',['beverages'=>$beverages]);
        
    }
}
