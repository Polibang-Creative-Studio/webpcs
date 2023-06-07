<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

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
        $data = $request->except(['_token']);
        crud::insert($data);    
        return redirect('/table');
        
            // menyimpan data file yang diupload ke variabel $file
    //         $file = $request->file('file');
     
    //                   // nama file
    //         echo 'File Name: '.$file->getClientOriginalName();
    //         echo '<br>';
     
    //                   // ekstensi file
    //         echo 'File Extension: '.$file->getClientOriginalExtension();
    //         echo '<br>';
     
    //                   // real path
    //         echo 'File Real Path: '.$file->getRealPath();
    //         echo '<br>';
     
    //                   // ukuran file
    //         echo 'File Size: '.$file->getSize();
    //         echo '<br>';
     
    //                   // tipe mime
    //         echo 'File Mime Type: '.$file->getMimeType();
     
    //                   // isi dengan nama folder tempat kemana file diupload
    //         $tujuan_upload = 'data_file';
     
    //                 // upload file
    //         $file->move($tujuan_upload,$file->getClientOriginalName());
        
    
    

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
    public function delete(String $id)
    {
        // $data=crud::find($id);
        // $data->delete();
        // return redirect()->route('/table');

        crud::table('activity')->where('id', $id)->delete();
        return redirect('/table');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
