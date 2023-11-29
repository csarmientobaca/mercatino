<?php

namespace App\Livewire;

// ClientList.php

use Livewire\Component;
use App\Models\User;
use App\Models\Product;

class ClientList extends Component
{
    public $users;
    public $products;
    public $selectedProduct;
    public $showAlert = false;


    public function mount()
    {
        $this->users = User::all();
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.client-list');
    }

    public function associateProduct($userId)
    {
        $user = User::findOrFail($userId);

        // Check if the product is already associated with the user
        if (!$user->products->contains($this->selectedProduct)) {
            $user->products()->attach($this->selectedProduct);
            $this->selectedProduct = null;
            $this->users = User::all(); // Refresh user data after association
        } else {
            // Product is already associated, add an error message
            $this->addError('selectedProduct', 'Product is already associated with the user.');
        }
    }

    public function disassociateProduct($userId, $productId)
    {
        $user = User::findOrFail($userId);
        $user->products()->detach($productId);
        $this->users = User::all(); // Refresh user data after disassociation
    }


    public function hideAlert()
    {
        // Hide the alert
        $this->showAlert = false;
    }
}
