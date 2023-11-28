<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ClientList extends Component
{
    public function render()
    {
        return view(
            'livewire.client-list',
            ['users' => User::all()]
        );
    }
}
