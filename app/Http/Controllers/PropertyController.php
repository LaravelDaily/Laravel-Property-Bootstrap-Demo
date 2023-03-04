<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\View\View;

class PropertyController extends Controller
{
    public function index(): View
    {
        $properties = Property::with(['images'])->where('is_featured', true)->inRandomOrder()->take(9)->get();

        return view('properties.index', compact('properties'));
    }
}
