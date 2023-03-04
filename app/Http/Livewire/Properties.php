<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use Illuminate\View\View;
use Livewire\WithPagination;

class Properties extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render(): View
    {
        $properties = Property::paginate();

        return view('livewire.properties', compact('properties'));
    }
}
