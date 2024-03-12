<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){


        $properties = Property::where('is_featured', true)->get();
        $agents = User::where('role', 'agent')->withCount('properties')
            ->get();
        $categories = Category::all();
        return view('home', compact('properties', 'agents', 'categories'));
    }

    public function about(){
        return view('about');
    }

    public function properties(){
        $properties = Property::all();
        return view('properties', compact('properties'));
    }

    public function agents(){
        $agents = User::where('role', 'agent')->withCount('properties')->get();
        return view('agents', compact('agents'));
    }

    public function blog(){
        return view('blog');
    }

    public function blogDetails(){
        return view('blogDetails');
    }

    public function contact(){
        return view('contact');
    }
}
