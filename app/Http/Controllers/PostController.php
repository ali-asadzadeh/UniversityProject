<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|integer',
            'date' => 'required|date',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->rating = $request->input('rating');
        $post->date = $request->input('date');

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/posts/images');
            $post->image_path = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect()->route('admin.posts.index');
    }

    public function edit($id): View
    {
        $post = post::findOrFail($id); // پیدا کردن محصول با شناسه مشخص
        return view('admin.posts.edit', ['post' => $post]); // ارسال محصول به نما
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|integer',
            'date' => 'required|date',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $post = Post::findOrFail($id);

        $post->title = $request->input('title');
        $post->rating = $request->input('rating');
        $post->date = $request->input('date');

        if ($request->hasFile('image_path')) {
            if ($post->image_path) {
                Storage::delete('public/posts/images/' . $post->image_path);
            }
            $imagePath = $request->file('image_path')->store('public/posts/images');
            $post->image_path = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        $post = post::findOrFail($id);

        // حذف تصویر اگر وجود داشته باشد
        if ($post->image_path && file_exists(storage_path('app/public/' . $post->image_path))) {
            unlink(storage_path('app/public/' . $post->image_path));
        }

        // حذف محصول
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'محصول با موفقیت حذف شد.');
    }


}

