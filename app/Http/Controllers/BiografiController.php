<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\mitra;
use Illuminate\Http\Request;
use App\Models\crud;



use Symfony\Contracts\Service\Attribute\Required;

class BiografiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
   
    $validateData= $request->validate([
        'Title' => 'required',
        'Heading'=> 'required',
        'Description' => 'required|max:255',
        'Picture' => 'image|file|max:2048'
    ]);
    

    if($request->file('Picture')) {
        $validateData['Picture']= $request->file('Picture')->store('foto');
        
    }

    crud::create($validateData);
     
    // if ($request->hasFile('Picture')){
    //     $request->file('Picture')->store('foto/', $request->file('Picture')->getClientOriginalName());
    //     $data->Picture = $request->file('Picture')->getClientOriginalName();
    //     $data->save();
        
    // }
    return redirect('/table');



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show()
    {
       $data=crud::all();
    // return $data;
   
    return view('admin.table',compact('data'));

        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($No)
    {
       // $data = crud::select('*')
       $data = crud::find($No);
       // dd($data);
        // ->where('No', $No)
        // ->get();
       return view('admin.edit',compact('data'));
     
        // return view('admin.edit', ['No' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $No)
    {
        $ubah = crud::findorfail($No);
        $awal = $ubah->Picture;

        $data = [
            'Title' => $request->Title,
            'Heading' => $request->Heading,
            'Description' => $request->Description,
            'Picture' => $awal,
        ];

        $request->Picture->move(public_path().'/storage/foto', $awal);
        $ubah->update($data);
       
        return redirect('/table');
        // return redirect()->route('table');
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = crud::where('No', $id)
        ->delete();

        return redirect('/table');
       
    }


public function anggota()
    {
       $data=anggota::all();
    // return $data;
   
    return view('admin.anggota.daftaranggota',compact('data'));

        
    
    }

    public function in()
    {
        return view ('admin.anggota.add');
    }
    public function add_anggota(Request $request)
    {   
   
    $validateData= $request->validate([
        'nama' => 'required',
        'jabatan'=> 'required',
        'sosmed'=> 'required',
        'kata_kata' => 'required|max:255',
        'gambar' => 'image|file|max:2048'
    ]);
    

    if($request->file('gambar')) {
        $validateData['gambar']= $request->file('gambar')->store('foto');
        
    }

    anggota::create($validateData);
     
    // if ($request->hasFile('Picture')){
    //     $request->file('Picture')->store('foto/', $request->file('Picture')->getClientOriginalName());
    //     $data->Picture = $request->file('Picture')->getClientOriginalName();
    //     $data->save();
        
    // }
    return redirect('/anggota');



    }

    public function edit_anggota($No)
    {
      
       $data = anggota::find($No);
       return view('admin.anggota.edit',compact('data'));
     
    
    }
    public function update_anggota(Request $request, $No)
    {
        $ubah = anggota::findorfail($No);
        $awal = $ubah->gambar;

        $data = [
            'nama' => $request->nama,
            'jabatan'=> $request->jabatan,
            'sosmed'=> $request->sosmed,
            'kata_kata' =>$request->kata_kata,
            'gambar' => $awal,
        ];

        $request->gambar->move(public_path().'/storage/foto', $awal);
        $ubah->update($data);
       
        return redirect('/anggota');
    }
    public function hapus($id)
    {
        $data = anggota::where('No', $id)
        ->delete();

        return redirect('/anggota');
       
    }

    public function mitra()
    {
       $data=mitra::all();
    // return $data;
   
    return view('admin.mitra.mitra',compact('data'));

        
    
    }
    public function index_mitra()
    {
        return view ('admin.mitra.add_mitra');
    }

    public function create_mitra(Request $request)
    {   
   
    $validateData= $request->validate([
        'nama' => 'required',
        'gambar' => 'image|file|max:2048'
    ]);
    

    if($request->file('gambar')) {
        $validateData['gambar']= $request->file('gambar')->store('foto');
        
    }

    mitra::create($validateData);

    return redirect('/mitra');



    }

    public function edit_mitra($No)
    {
      
       $data = mitra::find($No);
       return view('admin.mitra.edit_mitra',compact('data'));
     
    
    }
    public function update_mitra(Request $request, $No)
    {
        $ubah = mitra::findorfail($No);
        $awal = $ubah->gambar;

        $data = [
            'nama' => $request->nama,
            'gambar' => $awal,
        ];

        $request->gambar->move(public_path().'/storage/foto', $awal);
        $ubah->update($data);
       
        return redirect('/mitra');
    }

    public function delete($id)
    {
        $data = mitra::where('No', $id)
        ->delete();

        return redirect('/mitra');
       
    }

}