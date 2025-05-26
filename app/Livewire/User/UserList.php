<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title("Users")]
class UserList extends Component
{

    public $x = 0;

    public function increment(){
        $this->x++;
    }

    public function decrement(){
        $this->x--;
    }

    public function render()
    {
        return view('livewire.user.user-list');
    }
}
