<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = "Avengers";

    public function render()
    {
        $searchResults = [];

        if(strlen($this->search > 2))
        {
            $searchResults = Http::get('https://api.themoviedb.org/3/search/movie?api_key='. config('services.tmdb.api_key') . '&query=' . $this->search)->json()['results'];
        }
        dump($searchResults);

        return view('livewire.search-dropdown', [
            'searchResults' => $searchResults
        ]);
    }
}
