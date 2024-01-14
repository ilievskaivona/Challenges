<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\Category;

class DiscussionController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('discussions.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required|string',
        ]);

        $discussion = new Discussion();
        $discussion->user_id = auth()->id();
        $discussion->category_id = $request->input('category_id');
        $discussion->title = $request->input('title');
        $discussion->description = $request->input('description');

        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('discussion_images', 'public');
            $discussion->picture = $imagePath;
        }

        $discussion->save();

        return redirect()->route('discussions.create')->with('success', 'Discussion created successfully!');
    }

    // public function index()
    // {
    //     $discussions = Discussion::all(); 
    //     return view('discussions.index', compact('discussions'));
    // }
}
