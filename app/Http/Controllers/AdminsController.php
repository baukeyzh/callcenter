<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use Illuminate\Support\Facades\Session;


class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        return  view('admin.users.index')->with('users', User::all())->with('courses', Course::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.users.create');
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
            'email' => 'required|email|max:255|unique:users',
            'name' => 'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        if (!($request->password == $request->password_repeat)){
            Session::flash('info', 'Указаные пароли не совпадают');
            return redirect('admin/user/create');
        }
        $user->password = bcrypt($request->password);
        $user->save();
        Session::flash('success', 'Пользователь успешно изменен');
        return redirect('admin/users');
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
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user)->with('courses', Course::all());
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
        $user = User::find($id);
        if ($user->email != $request->email){
            $this->validate($request, [
                'email' => 'required|email|max:255|unique:users',
            ]);
        }
        $this->validate($request, [
            'name' => 'required'
        ]);
        if ($request->password != $request->password_repeat){
            Session::flash('info', 'Указаные пароли не совпадают');
            return redirect('admin/user/edit/'.$id.'');
        }
        if (strlen($request->password) != 0){
            $user->password = bcrypt($request->password);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        Session::flash('success', 'Пользователь успешно изменен');
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->admin){
            Session::flash('info', 'Администратор не может быть удален');
            return redirect()->back();
        }
        $user->delete();
        Session::flash('success', 'Пользователь успешно удален');
        return redirect()->back();
    }
}
