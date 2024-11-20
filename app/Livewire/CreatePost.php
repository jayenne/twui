<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create(
            $this->only(['title', 'content'])
        );

        return;
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
