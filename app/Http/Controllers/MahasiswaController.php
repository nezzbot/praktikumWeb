<?php

namespace App\Http\Controllers;


use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = mahasiswa::All();
        return view('mahasiswa.index', compact('mahasiswa'));
    } 
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
  
    //    dd($request->all());

        mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Inventory created successfully.');
    }

    public function show(mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
    {

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa updated successfully');
    }

    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'mahasiswa deleted successfully');
    }
}
