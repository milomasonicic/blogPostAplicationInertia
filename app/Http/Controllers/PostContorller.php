<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostContorller extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->validate([
          'title' => ['required', 'max:50'],
          'content' => ['required', 'max:50'],
        ]);

        $data['user_id'] = auth()->user()->id;

        Post::create($data);

        return to_route('list');
    }
}
