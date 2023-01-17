<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Community;
use Illuminate\Support\Facades\Auth;

class HomeSearch extends Component
{
    public $search;

    public function joinCommunity($id)
    {
        $community = Community::find($id);
        $community->users()->attach(Auth::user()->id);
    }

    public function leaveCommunity($id)
    {
        $community = Community::find($id);
        $community->users()->detach(Auth::user()->id);
    }

    public function render()
    {
        // if search is not empty, search for communities
        if ($this->search != '') {
            $communities = Community::where('name', 'like', '%' . $this->search . '%')->get();
            // check if user is already a member of the community
            foreach ($communities as $community) {
                $community->is_member = $community->users->contains(Auth::user()->id);
            }
        } else {
            $communities = [];
        }

        return view('livewire.home-search', [
            'communities' => $communities,
        ]);
    }
}
