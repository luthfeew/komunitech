<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    public $numResults = 5;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->numResults += 5;
    }

    public function render()
    {
        $posts = Post::orderBy('created_at', 'desc')->take($this->numResults)->get();
        $this->dispatchBrowserEvent('loading-complete');
        return view('livewire.show-posts', compact('posts'));
    }
}
