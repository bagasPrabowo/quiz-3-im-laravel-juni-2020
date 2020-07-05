<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(){
    	$artikels = Artikel::all();
    	return view('contents.index', get_defined_vars());
    }

    public function create(){
    	return view('contents.form');
    }

    public function store(Request $request){
        Validator::make($request->all(), [
            'judul' => 'required|unique:artikels',
            'isi' => 'required'
        ], [
            'required' => ':attribute harus diisi!',
            'unique' => ':attribute pertanyaan tidak boleh sama',
        ])->validate();
    	$artikels = Artikel::create(
    		array_merge(
    			$request->all(), [
    				'slug' => Str::slug($request->judul, '-'),
    			]
    		));
    	if ($artikels->save()) {
    		return redirect()->route('artikel.index');
    	}
        return redirect()->back();
    }

    public function show($id){
        $artikel = Artikel::find($id);
        return view('contents.show', get_defined_vars());
    }

    public function edit(Artikel $id){
        return view('contents.edit', get_defined_vars());
    }

    public function update(Request $request, $id){
        Validator::make($request->all(), [
            'judul' => 'required',
            'isi' => 'required',
        ], [
            'required' => ':attribute harus diisi!',            
        ])->validate();
        $artikels = Artikel::find($id);
        if ($artikels->update($request->all())) {
            return redirect()->route('artikel.show',['id' => $id]);
        }
        return redirect()->back();
    }

    public function delete($id){
        $artikel = Artikel::find($id);
        if ($artikel->delete()) {
        return redirect()->route('artikel.index');
        }
        return redirect()->back();
    }
}
