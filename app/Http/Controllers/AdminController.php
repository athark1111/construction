<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $arr['users'] = User::paginate(10);
        return view('admin.index')->with($arr);
        //also can write it as return view('admin.categories.index',$arr);
        // also could be written as return view('admin.categories.index',['categories=>$categories']
        //here $categories mesn that the data carried by array willbe available with name of $categories
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, User $users)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->role = $request->role;
        $users->password = bcrypt($request->password);
        $users->save();

        return redirect()->route('admin.index');
        /*
        we can write   return redirect('admin/categories');
        as below
        return redirect()->route('admin.categories.index');
        the advantage is to writing this is  whenever if we want to do change the route
        " /admin " in Route::resource('/admin/categories',
        to any text like,for example " /administrator/categories" in web.php file then
        we don't need to change the word " admin " in any function in CategoriesController.php
        file for better understanding see-----> return redirect('admin/categories');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $arr = User::find($id);
        return view('admin.edit')->with('edit_user', $arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
        $user = User::find($id);

        if($request->input('password')!=null){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'role' => 'required',
                'password' => 'required|min:6',
            ]);
            $user->password = bcrypt($request->input('password'));
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');

        $user->update();
        return redirect()->route('admin.index')->with('status', 'User data is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.index');
    }
}
