<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Role;
use App\Photo;
use Illuminate\Support\Facades\Auth;

class adminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();


        if (Auth::check()){
            if (Auth::User()->isAdmin()){

                return view('admin.users.index', compact('users'));
            }

             return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::lists('name','id')->all();

        return view ('admin.users.create', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
     /*   User::create($request->all());
        */



//    $input=$request->all();

//        this is to prevent an empty space our password. checkout tags for laravel

        if (trim($request->password ) == '')

            $input=$request->except('password');

        else{

                $input=$request->all();
            }






     $input['password']=bcrypt($request->password);

     if ($file=$request->file('photo_id')){

        $name= time() . $file->getClientOriginalName();
        $file->move('images',$name);
        $photo=Photo::create(['file'=>$name]);
        $input['photo_id']=$photo->id;


     }


     User::create($input);
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
        $user=User::findOrFail($id);
        $roles=Role::lists('name','id');
        return view('admin.users.edit', compact('user', 'roles'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $input=$request->all();
        $user=User::findOrfail($id);


        if ($file=$request->file('photo_id')){

            $name= time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;
        }
//



        $user->update($input);
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
        $user=User::findOrFail($id);
        $user->delete();

        return redirect('/admin/users');
    }
}
