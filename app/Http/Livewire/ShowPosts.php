<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Community;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Auth;

class ShowPosts extends Component
{
    public $numResults = 5;
    public $community;
    public $post_id;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->numResults += 5;
    }

    public function upvote($id)
    {
        $post = Post::find($id);
        // update or create vote
        $post->votes()->updateOrCreate(
            ['user_id' => Auth::user()->id],
            ['vote' => 1]
        );
    }

    public function downvote($id)
    {
        $post = Post::find($id);
        // update or create vote
        $post->votes()->updateOrCreate(
            ['user_id' => Auth::user()->id],
            ['vote' => -1]
        );
    }

    public function unvote($id)
    {
        $post = Post::find($id);
        // update or create vote
        $post->votes()->updateOrCreate(
            ['user_id' => Auth::user()->id],
            ['vote' => 0]
        );
    }

    public function render()
    {
        if ($this->post_id) {
            $posts = Post::where('id', $this->post_id)->get();
            $is_community = true;
            $is_post = true;
        } elseif ($this->community) {
            $posts = Post::where('community_id', $this->community->id)
                ->orderBy('created_at', 'desc')
                ->take($this->numResults)
                ->get();
            $is_community = true;
            $is_post = false;
        } else {
            if (Auth::check()) {
                $user_id = Auth::user()->id;

                // get user communities
                $communities = Community::whereHas('users', function ($query) use ($user_id) {
                    $query->where('user_id', $user_id);
                })->get();

                // get posts from user communities
                $posts = Post::whereIn('community_id', $communities->pluck('id'))
                    ->orderBy('created_at', 'desc')
                    ->take($this->numResults)
                    ->get();
            } else {
                $posts = Post::orderBy('created_at', 'desc')
                    ->take($this->numResults)
                    ->get();
                
                $is_guest = true;
            }
            $is_community = false;
            $is_post = false;
        }

        // encode post id using hashids
        foreach ($posts as $post) {
            $post->hashid = Hashids::encode($post->id);
        }

        $this->dispatchBrowserEvent('loading-complete');
        return view('livewire.show-posts', [
            'posts' => $posts,
            'is_community' => $is_community,
            'is_post' => $is_post,
            'is_guest' => $is_guest ?? false
        ]);
    }
}
