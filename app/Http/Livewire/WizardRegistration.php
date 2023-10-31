<?php


namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component;

class WizardRegistration extends Component
{
    public $currentStep = 1;
    public $name,$email,$password, $password_confrim;
    public function render()
    {
        return view('livewire.wizard-registration');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);
 
        $this->currentStep = 2;
    }

    public function createUser()
    {
        $validatedData = $this->validate([
            'password' => 'required',
            'password_confrim' => 'required|same:password_confrim',
        ]);
        
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        Auth::login($user);
        redirect('/');
    }
    
    public function backBtn() 
    {
        $this->currentStep = 1;
    }
}
