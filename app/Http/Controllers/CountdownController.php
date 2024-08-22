<?php

namespace App\Http\Controllers;

use App\Models\Countdown;
use Illuminate\Http\Request;

class CountdownController extends Controller
{
    public function homepage()
    {
        // تابعی برای نمایش countdown در صفحه اصلی، در صورت نیاز می‌توانید آن را حذف کنید یا پیاده‌سازی کنید.
        $countdowns = Countdown::orderBy('end_at', 'desc')->get();
        return view('homepage', compact('countdowns'));
    }

    public function index()
    {
        $countdowns = Countdown::all();
        return view('admin.countdowns.index', compact('countdowns'));
    }

    public function create()
    {
        return view('admin.countdowns.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'end_at' => 'required|date',
        ]);

        Countdown::create($request->all());

        return redirect()->route('admin.countdowns.index')
            ->with('success', 'Countdown created successfully.');
    }

    public function edit($id)
    {
        $countdown = Countdown::findOrFail($id);
        return view('admin.countdowns.edit', compact('countdown'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'end_at' => 'required|date',
        ]);

        $countdown = Countdown::findOrFail($id);
        $countdown->update($request->all());

        return redirect()->route('admin.countdowns.index')
            ->with('success', 'Countdown updated successfully.');
    }

    public function destroy($id)
    {
        $countdown = Countdown::findOrFail($id);
        $countdown->delete();

        return redirect()->route('admin.countdowns.index')
            ->with('success', 'Countdown deleted successfully.');
    }
}
