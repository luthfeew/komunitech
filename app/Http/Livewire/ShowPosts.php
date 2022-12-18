<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Vinkla\Hashids\Facades\Hashids;

class ShowPosts extends Component
{
    public $numResults = 5;
    public $community;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->numResults += 5;
    }

    public function render()
    {
        if ($this->community) {
            $posts = Post::where('community_id', $this->community->id)
                ->orderBy('created_at', 'desc')
                ->take($this->numResults)
                ->get();
            $is_community = true;
        } else {
            $posts = Post::orderBy('created_at', 'desc')
                ->take($this->numResults)
                ->get();
            $is_community = false;
        }

        // encode post id using hashids
        foreach ($posts as $post) {
            $post->hashid = Hashids::encode($post->id);
        }

        $this->dispatchBrowserEvent('loading-complete');
        return view('livewire.show-posts', [
            'posts' => $posts,
            'is_community' => $is_community
        ]);
    }
}
