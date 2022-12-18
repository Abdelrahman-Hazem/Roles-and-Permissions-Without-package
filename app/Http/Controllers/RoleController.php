<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::orderBy('id','desc')->get();
        return view('dashboard.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.roles.create');

    }

   
    public function store(RoleRequest $request )
    {
       try {
        $role = $this->process(New Role ,$request);
        if($role)
         return redirect('roles')->with(['success'=>'stored successfully']);
         else
            return redirect('roles')->with(['erroe'=>'some thing went wrong']);
        } catch (\Exception $ex) {
     return $ex;
     return redirect('roles')->with(['erroe'=>'some thing went wrong']);

       }
    }
    public function process(Role $role ,Request $r)
    {
        $role->name = $r->name ;
        $role->permissions = json_encode($r->permissions) ;
        $role->save();
        return $role ;


    }

    public function show(Role $role)
    {
        return view('dashboard.roles.show',compact('role'));
        
    }

    public function edit(Role $role)
    {
        return view('dashboard.roles.edit' ,compact('role'));

    }

    public function update($id ,RoleRequest $request)
    {
        try {
            $role = Role::findOrfail($id);
            $role=$this->process($role,$request);
            if($role){
                return redirect()->route('roles.index')->with(['success'=>'successfully updated']);
            }else{
                return redirect()->route('roles.index')->with(['error'=>'something went wrong']);
            }
        } catch (\Throwable $ex) {
            return  $ex;
            return redirect()->route('roles.index')->with(['error'=>'something went wrong']);
            
        }
    }
    public function destroy(Role $role)
    {
      
        $role->delete();
        return redirect('roles');

    }


}
