<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDepartment;
use App\Models\UserRole;
use App\Models\UserDepartmentRole;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId =  Auth::id();
        $authUser = [];
        $departmentUsers = [];
        $department_id = Session::get('department_id');
        if($department_id != null){
            $authUser = UserDepartmentRole::where('department_id',$department_id)->where('user_id',$userId)->first();
        }
        if($authUser != null){
            $departmentUsers = UserDepartmentRole::where('department_id',$department_id)->where('role_id','>',$authUser->role_id)->orderBy('role_id')->get();
        }
        return view('home',compact('departmentUsers','authUser'));
       
    }
    public function join_department(Request $request){
        $userId =  Auth::id();
        $userdepartment = UserDepartmentRole::where('user_id',$userId)->where('department_id',$request->department_id)->first();
        $userrole = UserDepartmentRole::where('user_id',$userId)->Where('role_id',$request->role_id)->first();
        if($userdepartment != null || $userrole != null){
            return back()->with('error','you are already exist this role or department!');
        }else{
            $data = new UserDepartmentRole;
            $data->department_id = $request->department_id;
            $data->role_id = $request->role_id;
            $data->user_id = Auth::id();
            $data->save(); 
            return back()->with('success','you joined the department successfully!'); 
        }
    }
}
