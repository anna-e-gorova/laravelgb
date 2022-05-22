<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Stringable;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello', [
        ]);
    }

    public function feedback(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => ['required', 'string'],
                'description' => ['required', 'string']
            ]);
        }

        return view('feedback', [
        ]);
    }

    public function order(Request $request)
    {
        return view('order', [
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string'],
            'email' => ['email', 'string'],
            'info' => ['required', 'string']
        ]);

        $input = $request->except('_token');
        $userData = collect($input)->implode(' ');
        Storage::disk('local')->append('exports.txt', $userData);


        //return response()->json($request->only(['title', 'author', 'status', 'description']), 201);
        return redirect()->route('news.index');
    }
}
