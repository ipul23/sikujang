<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Employee;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users  = User::orderBy('id','name')->where('user_status','=',1)->paginate(5);
        return view('user.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function log(Request $request)
    {
        $users  = Employee::orderBy('employee_id')->whereDate('created_at',\Carbon\Carbon::parse(\Carbon\Carbon::now())->format('Y-m-d'))->paginate(5);
        return view('user.log',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:password'
        ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password_confirmation' => $request['password_confirmation'],
            'password_backup' => $request['password'],
            'password' => bcrypt($request['password']),
        ]);
        return redirect()->route('user.index')
                        ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')
                        ->with('success','Karyawan deleted successfully');
    }
}
