<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post)
    {
        $posts = [
            'oof' => 'hmm',
            'derp' => 'herp'
        ];

        if (!array_key_exists($post, $posts))
        {
            abort(404, 'no');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
