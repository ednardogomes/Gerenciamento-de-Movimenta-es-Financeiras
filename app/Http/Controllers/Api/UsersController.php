<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUsersRequest;
use App\Http\Resources\UsersResource;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::all();
        return UsersResource::collection(($users));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUsersRequest $request)
    {
        $newUser = Users::create($request->validated());
        return new UsersResource($newUser);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(CreateUsersRequest $request, Users $user)
    {
        $user->update($request->validated());
        return new UsersResource(($user));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $user)
    {
        $user->delete();
        return response(null, 204);
    }
}
