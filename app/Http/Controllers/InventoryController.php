<?php

namespace App\Http\Controllers;
use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {

        $inventorys = Inventory::all();

        return view('inventory.index',compact('inventorys'));
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
        Inventory::create($request->all());
        return Redirect('/inventory');
    }

    public function show($id)
    {
        return view('inventory.show', ['inventory'=>Inventory::findOrFail($id)]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory=Inventory::find($id);
        return view('inventory.edit', compact('inventory','id'));
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
        $inventory= Inventory::findorfail($id);
        $input = $request->all();
        $inventory->update($input);
        return redirect('inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();
        return redirect('inventory');
    }

}