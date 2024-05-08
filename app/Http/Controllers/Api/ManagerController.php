<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagerRequest;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Manager::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagerRequest $request)
    {
        $validated = $request->validated();

        $medicines = Manager::create($validated);

        return $medicines;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Manager::findOrFail($id);
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
    public function update(ManagerRequest $request, string $id)
    {
        $validated = $request->validated();

        $manager = Manager::findOrFail($id);

        $manager->update($validated);

        return $manager;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manager = Manager::findOrFail($id);

        $manager->delete();

        return $manager;
    }
}
