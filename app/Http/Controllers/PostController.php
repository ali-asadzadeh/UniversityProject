<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{

    public function homePage()
    {
        // بارگذاری پست‌ها از پایگاه داده
        $posts = Post::all();

        // ارسال پست‌ها به نمای homePage
        return view('homePage', ['posts' => $posts]);
    }


    public function index(): View
    {
        $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create(): View
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit($id): View
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            // حذف تصویر قبلی
            if ($post->image_path && Storage::exists('public/' . $post->image_path)) {
                Storage::delete('public/' . $post->image_path);
            }

            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $post->image_path;
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // حذف تصویر
        if ($post->image_path && Storage::exists('public/' . $post->image_path)) {
            Storage::delete('public/' . $post->image_path);
        }

        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
}
