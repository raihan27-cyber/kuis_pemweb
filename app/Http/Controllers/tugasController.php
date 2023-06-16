<?php

namespace App\Http\Controllers;

use App\Models\tugas;
use Illuminate\Http\Request;

class tugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =tugas::orderBy('id','asc')->paginate(1);
        return view('tugas.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=> 'required',
            'deskripsi'=> 'required',
        ]);
        $data = [
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
        ];
        tugas::create($data);
        return redirect()->to('tugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
