<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->when(request()->q, function ($tags) {
            $tags = $tags->where('name', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.tag.index', compact('tags'));
    }
    public function create()
    {
        return view('admin.tag.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:tags'
        ]);
        $tag = Tag::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '-')
        ]);
        if ($tag) {
            return redirect()->route('tag')->with(['success' => 'Tag Berhasil Disimpan!']);
        } else {
            return redirect()->route('tag')->with(['error' => 'Tag Gagal Disimpan!']);
        }
    }
    public function edit(Tag $tag,$id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit', compact('tag'));
    }
    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $tag->name = $validated['name'];
        $tag->save();
        if ($tag) {
            return redirect()->route('tag')->with(['success' => 'Tag Berhasil Diubah!']);
        } else {
            return redirect()->route('tag')->with(['error' => 'Tag Gagal Diubah!']);
        }
    }
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        if ($tag) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
