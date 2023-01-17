<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Community;
use Illuminate\Support\Facades\Auth;

class UserCommunity extends Component
{
    public function leaveCommunity($id)
    {
        $community = Community::find($id);
        $community->users()->detach(Auth::user()->id);
    }

    public function render()
    {
        $communities = Community::whereHas('users', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->get();

        return view('livewire.user-community', compact('communities'));
    }
}
