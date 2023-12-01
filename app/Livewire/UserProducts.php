<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserProducts extends Component
{
    public $userName;

    public function mount()
    {
        // Set the user's name
        $this->userName = Auth::user()->name;
    }

    public function render()
    {
        $user = Auth::user();

        // Fetch products associated with the current user
        $products = $user->products;

        return view('livewire.user-products', ['products' => $products, 'userName' => $this->userName]);
    }
}
