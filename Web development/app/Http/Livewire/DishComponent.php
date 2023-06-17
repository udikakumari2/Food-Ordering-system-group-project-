<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Post;
use Livewire\WithPagination;

class DishComponent extends Component
{
    
      use WithPagination;
    public function render()
    {
        $Post=Post::paginate(16);
       // dd($Post->first());
        return view('livewire.dish-component',['Post'=>$Post]);
    }
}
