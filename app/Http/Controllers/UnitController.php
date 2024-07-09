<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UnitController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();
        return view('admin.unit.index',['units'=> $units]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/unit.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            
        $request->validate([
            'unit_name'=>'required|unique:units',
            'unit_desc'=>''
        ]);
        
        
        
        
        $data = $request->only('unit_name','unit_desc');
        //ClassName ::Method ();

        Unit::create($data);

        return back()->with('success',"A Unit has been successfully created ");

    }
        


    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
