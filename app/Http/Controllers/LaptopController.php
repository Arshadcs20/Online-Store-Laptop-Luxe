<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptops = Laptop::all();
        return view('laptops.index', compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laptops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'processor' => 'required',
            'ram' => 'required|integer',
            'storage' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Laptop::create($request->only(['brand', 'model', 'processor', 'ram', 'storage', 'price']));

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $laptop = Laptop::findOrFail($id);
        return view('laptops.show', compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $laptop = Laptop::findOrFail($id);
        return view('laptops.edit', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'processor' => 'required',
            'ram' => 'required|integer',
            'storage' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $laptop = Laptop::findOrFail($id);
        $laptop->update($request->only(['brand', 'model', 'processor', 'ram', 'storage', 'price']));

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop deleted successfully.');
    }
}
