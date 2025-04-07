<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Land;
use Illuminate\Support\Facades\Storage;

class LandController extends Controller
{
    public function index()
    {
        $lands = Land::all();
        return view('land.index', compact('lands'));
    }

    public function create()
    {
        return view('land.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Land::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $imagePath,
        ]);

        return redirect()->route('lands.index');
    }

    public function edit($id)
    {
        $land = Land::findOrFail($id);
        return view('land.edit', compact('land'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $land = Land::findOrFail($id);

        $imagePath = $land->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $land->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $imagePath,
        ]);

        return redirect()->route('lands.index');
    }

    public function destroy($id)
    {
        $land = Land::findOrFail($id);
        if ($land->image) {
            Storage::delete('public/' . $land->image);
        }
        $land->delete();
        return redirect()->route('lands.index');
    }
}
