<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomePageComponent extends Component
{
    public $count = 0;
    public $counttoast = 0;

    public function toast()
    {
        $this->dispatchBrowserEvent('toaster:info',[
            'message' => 'record stored succesfully',
        ]);
        $this->counttoast++;
    
}
public function sweetalert()
{
    $this->dispatchBrowserEvent('swal:modal',[
        'title'=> "Good job!",
        'text'=> "You launched the sweet alert!",
        'icon'=> "success",
        'button'=> "Aww yess!",
    ]);
    $this->count++;
}

    public function render()
    {
        return view('livewire.home-page-component')->layout('welcome');
    }
}
