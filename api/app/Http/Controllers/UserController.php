<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UserCollection(User::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, User $user)
    {
        return new UserResource($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validatedData = $request->validated();

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'company_name' => $validatedData['company_name'],
            'sex' => $validatedData['sex'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $user->user_details()->create([
            'district_code' => $validatedData['district_code'],
            'physical_address' => $validatedData['physical_address'],
            'country' => $validatedData['country'],
            'phone_number' => $validatedData['phone_number'],
        ]);

        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $validatedData = $request->validated();
        $user->update($validatedData);
        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, User $user)
    {
        $user->delete();

        return response()->noContent();
    }
}
