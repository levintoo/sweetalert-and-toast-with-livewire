<?php

namespace App\Http\Livewire;

use Livewire\Component;

use function PHPSTORM_META\type;

class HomePageComponent extends Component
{
    public $count = 0;
    public $counttoast = 0;
    protected $listeners = ['delete'];

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
        'type' => "warning",
        'title'=> "Good job!",
        'text'=> "You launched the sweet alert!",
        'icon'=> "success",
        'button'=> "Aww yess!",
        'id' => '192',
    ]);
    $this->count++;
}

public function delete($id)
{
    $this->dispatchBrowserEvent('toaster:info',[
        'message' => 'deleted sucessfully',
    ]); 
}

    public function render()
    {
        return view('livewire.home-page-component')->layout('welcome');
    }
}
