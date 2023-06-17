<?php

namespace App\Http\Livewire;
use App\Models\foods;
use App\Models\beverages;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class HomeComponent extends Component
{
    use WithPagination;
    public function store($product_id,$product_name,$product_price){
      Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\foods');
      session()->flash('success_message1','Item added in cart');
      return redirect()->route('addtocart');
    }
    public function render()
    {
        $foods=foods::paginate(6);
      //  dd($foods->first());
      $beverages=beverages::paginate(6);
     //dd($beverages->first());
        return view('livewire.home-component',['foods'=>$foods],['beverages'=>$beverages]);
    }
}
