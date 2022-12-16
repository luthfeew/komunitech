<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Vinkla\Hashids\Facades\Hashids;

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
        // encode post id using hashids
        foreach ($posts as $post) {
            $post->hashid = Hashids::encode($post->id);
        }

        $this->dispatchBrowserEvent('loading-complete');
        return view('livewire.show-posts', [
            'posts' => $posts,
        ]);
    }
}
