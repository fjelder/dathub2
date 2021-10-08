<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('isAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $countAllUsers = User::all()->count();
        $countAdmin = User::where('is_admin', 1)->count();
        $users = User::simplePaginate(10);
        return view('user.index', [
            'users' => $users,
            'allUsers' => $countAllUsers,
            'allAdmin' => $countAdmin,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
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
        //
        $user = User::where('id', $id)->first();
        if($request->is_active != $user->is_active)
        {
            $user->is_active = $request->is_active;
            $user->save();
            return redirect()->route('users.index')->with('status', 'Konto użytkownika <span class="text-extra">'.$user->name.'</span> zostało zaktualizowane!')->with('state', '1');
        }
        return redirect()->route('users.index')->with('status', 'Ustawienia konta użytkownika <span class="text-extra">'.$user->name.'</span> nie zostały zmienione!')->with('state', '3');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
