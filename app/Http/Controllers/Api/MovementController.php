<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovementRequest;
use App\Http\Resources\MovementResource;
use App\Models\Movement;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = Movement::all();
        return MovementResource::collection(($movements));
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
    public function store(StoreMovementRequest $request)
    {
        $movement = Movement::create($request->validated());
        return new MovementResource(($movement));
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Movement $movement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movement $movement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMovementRequest $request, Movement $movement)
    {
        $movement->update($request->validated());
        return new MovementResource(($movement));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movement $movement)
    {
        $movement->delete();
        return response(null, 204);
    }
}
