<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $relationShipContraint = false;
        $users = QueryBuilder::for(User::class)
            ->join('user_details', 'user_details.account_id', 'users.account_id')
            ->allowedFilters(AllowedFilter::exact('user_details.district_code', null, $relationShipContraint))
            ->paginate();
        return new UserCollection($users);
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


        $user = DB::transaction(function () use ($validatedData) {
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
                'account_id' => $user->account_id,
                'district_code' => $validatedData['district_code'],
                'physical_address' => $validatedData['physical_address'],
                'country' => $validatedData['country'],
                'phone_number' => $validatedData['phone_number'],
            ]);

            return $user;
        });

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
