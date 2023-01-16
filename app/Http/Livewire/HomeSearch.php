<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Community;

class HomeSearch extends Component
{
    public $search;

    public function render()
    {
        // if search is not empty, search for communities
        if ($this->search != '') {
            $communities = Community::where('name', 'like', '%' . $this->search . '%')->get();
        } else {
            $communities = [];
        }

        return view('livewire.home-search', [
            'communities' => $communities,
        ]);
    }
}
