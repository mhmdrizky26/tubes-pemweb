<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->when(request()->q, function ($events) {
            $events = $events->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.event.index', compact('events'));
    }
    public function create()
    {
        return view('admin.event.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required',
            'location'  => 'required',
            'date'      => 'required'
        ]);

        $event = Event::create([
            'title'     => $request->input('title'),
            'slug'      => Str::slug($request->input('title'), '-'),
            'content'   => $request->input('content'),
            'location'  => $request->input('location'),
            'date'      => $request->input('date')
        ]);

        if ($event) {
            return redirect()->route('agenda')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('agenda')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function edit(Event $event,$id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.edit', compact('event'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'     => 'required|string|max:255',
            'content'   => 'required',
            'location'  => 'required',
            'date'      => 'required|date'
        ]);

        $agenda = Event::findOrFail($id);

        $agenda->title = $validatedData['title'];
        $agenda->content = $validatedData['content'];
        $agenda->location = $validatedData['location'];
        $agenda->date = $validatedData['date'];

        $agenda->save();
        if ($agenda->wasChanged()) {
            return redirect()->route('agenda')->with('success', 'Data berhasil diubah!');
        } else {
            return redirect()->route('agenda')->with('error', 'Tidak ada perubahan yang terjadi.');
        }
    }
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        if ($event) {
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
