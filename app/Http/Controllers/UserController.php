<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return User::all();
    }
    public function myProducts(){
        $fermer=User::find(auth()->id());
        $fermer->products;
        return $fermer;
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
    public function store(Request $request)
    {
        $validated=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role
        ];
        $user=User::create($validated);
        $auth=new AuthController();

        return $auth->login($user)->original;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::find($id);
        $user->products;
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user=User::find(auth()->id());
        $validated=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role
        ];
        $user=User::create($validated);
        $auth=new AuthController();
        $user->update($validated);
        return $auth->login($user)->original;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $user=Worker::find($id);
        // File::deleteDirectory(storage_path("app/public/images/$user->id"));
        // File::deleteDirectory(storage_path("app/public/files/$worker->id"));
        // $worker->delete();
    }
}
