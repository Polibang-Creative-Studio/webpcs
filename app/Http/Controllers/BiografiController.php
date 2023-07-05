<?php

namespace App\Http\Controllers;

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
    public function update(Request $request)
    {
        $data = crud::where('No', $request->No)
        ->update([
               'Title' => $request->Title,
               'Heading' => $request->Heading,
               'Description' => $request->Description,
               'Picture' => $request->Picture,
        ]);

        return redirect()->route('table');
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
}
