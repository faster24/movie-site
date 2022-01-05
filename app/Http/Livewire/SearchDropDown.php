<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropDown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if(strlen($this->search) >= 2)
        {
            $searchResults = Http::withToken(config('services.tmdb.token'))
                                ->get('https://api.themoviedb.org/3/search/movie?api_key=be7f9cdb84e9a639e1e846dbff9e4960&query=' . $this->search )
                                ->json(['results']);

        }

        return view('livewire.search-drop-down' , [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
