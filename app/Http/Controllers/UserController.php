<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::latest()->where('id','<>',auth()->id())->get();
    	return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
    	return view('dashboard.users.create',compact('roles'));
    }


    public function store(UserRequest $request)
    {
        $user = New User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        if($user->save()){
            return redirect('users')->with(['succcess'=>'saved']);
        }else{
            return redirect('users')->with(['error'=>'some thing went wrong']);

        }

        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
      return view('dashboard.users.edit',compact('user','roles'));
    }

    
    public function update(UserRequest $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }
}
