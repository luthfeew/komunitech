<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class Vote extends Component
{
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
        return view('livewire.vote', [
            'item' => $this->post
        ]);
    }
}
