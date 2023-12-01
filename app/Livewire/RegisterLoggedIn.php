<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterLoggedIn extends Component
{
    public $name;
    public $last_name;
    public $email;
    public $place_in_map;
    public $password;
    public $password_confirmation;

    public $showRegistrationModal = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'place_in_map' => 'required|string|max:255',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'place_in_map' => $this->place_in_map,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user);

        session()->flash('message', 'Registration successful!');
        $this->resetForm();
        $this->showRegistrationModal = false;

        return redirect()->to('/'); // Redirect wherever you want after registration
    }

    public function openRegistrationModal()
    {
        $this->resetForm();
        $this->showRegistrationModal = true;
    }

    public function closeRegistrationModal()
    {
        $this->showRegistrationModal = false;
    }

    private function resetForm()
    {
        $this->reset(['name', 'last_name', 'email', 'place_in_map', 'password', 'password_confirmation']);
    }

    public function render()
    {
        return view('livewire.register-logged-in');
    }
}
