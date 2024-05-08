<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Staff::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffRequest $request)
    {
        $validated = $request->validated();

        $staff = Staff::create($validated);

        return $staff;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Staff::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaffRequest $request, string $id)
    {
        $validated = $request->validated();

        $staff = Staff::findOrFail($id);

        $staff->update($validated);

        return $staff;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff = Staff::findOrFail($id);

        $staff->delete();

        return $staff;
    }
}
