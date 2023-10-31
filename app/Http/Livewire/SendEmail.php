<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SendEmail extends Component
{
    public function render()
    {
        return view('livewire.send-email');
    }
    public $name;
    public $email;
    public $messege;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'messege' => 'required|min:5',
    ];
  
    public function submit()
    {
        $data = $this->validate();
       
        \Mail::to('arsyadamid.work@gmail.com')->send(new \App\Mail\MyTestMail($data));

        $this->success = true;
  
        $this->clearFields();
    }
    
  
    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->messege = '';
    }
}
