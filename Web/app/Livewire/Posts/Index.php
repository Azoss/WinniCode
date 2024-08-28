<?php

namespace App\Livewire\Posts;

use Livewire\Component;

#[Title("Index") ]

class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index');
    }
}
