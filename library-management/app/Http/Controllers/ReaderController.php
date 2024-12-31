<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reader;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers = Reader::paginate(10);
        return view('readers.index', compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('readers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        reader::create($request->all());
        return redirect()->route('readers.index')->with('success', 'Thêm người đọc thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reader $reader)
    {
        return view('readers.show', compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reader $reader)
    {
        return view('readers.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reader $reader)
    {
        $request->validate([
            'name' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $reader->update($request->all());

        return redirect()->route('readers.index')->with('success', 'reader updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reader $reader)
    {
        $reader->delete();

        return redirect()->route('readers.index')->with('success', 'reader deleted successfully.');
    }
}
