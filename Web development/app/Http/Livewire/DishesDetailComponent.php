<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Post;

class DishesDetailComponent extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug=$slug;
    }
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Post');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('addtocart',['slug'=>$this->slug]);
      }
    public function render()
    {
        $Post=Post::where('slug',$this->slug)->first();
        return view('livewire.dishes-detail-component',['Post'=>$Post]);
    }
}
