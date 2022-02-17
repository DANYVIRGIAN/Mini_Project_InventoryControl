<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inventory = Inventory::all(); 
             
        return view('Inventory.index', ['Inventory' => $Inventory]); 
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'nama' => 'required', 
          'alamat' => 'required', 
          'stok' => 'required', 
        ]);
      
        $input = $request->all();
      
        $inventory = Inventory::create($input);
       
        return back()->with('success',' Post baru berhasil dibuat.');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Inventory = Inventory::findOrFail($id);
        
        return view('Inventory.edit', [
               'Inventory' => $Inventory
        ]);
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required', 
            'harga' => 'required', 
            'stok' => 'required', 
          ]);
        
              
        $Inventory = Inventory::find($id)->update($request->all()); 
               
        return back()->with('success',' Data telah diperbaharui!');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Inventory = Inventory::find($id);
     
        $Inventory->delete();
     
        return back()->with('success',' Penghapusan berhasil.');
     }
}
