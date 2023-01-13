<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\PostComment;

class ShowComment extends Component
{
    public $post_id;

    public function render()
    {
        return view('livewire.show-comment', [
            'comments' => PostComment::with('user', 'replies.user')
                ->where('post_id', $this->post_id)
                ->where('parent_id', null)
                ->orderBy('created_at', 'desc')
                ->get(),
        ]);
    }
}
