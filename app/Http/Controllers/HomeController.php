<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $agents = Agent::inRandomOrder()->take(3)->get();
        $testimonials = Testimonial::inRandomOrder()->take(9)->get();
        $properties = Property::with(['images'])->where('is_popular', true)->inRandomOrder()->take(9)->get();

        return view('welcome', compact('agents', 'testimonials', 'properties'));
    }
}
