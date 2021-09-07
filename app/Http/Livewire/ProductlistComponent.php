<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ProductlistComponent extends Component
{
    public function store($product_id, $product_name, $product_price){
        Cart::add($product_id, $product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item Added In Cart');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        $products = Product::paginate(9);
        return view('livewire.productlist-component',['products'=> $products])->layout('layouts.base');
    }
}
