<?php

namespace App\Http\Controllers;

use App\Datatables\UserDatatable;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        $datatable = new UserDatatable();
//        return $datatable->render('users.index');



        $users= User::all();

        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(UserRequest $request)
    {
        $request->validate([
            'email'         => ['unique:users',],
            'password'      => ['string', 'required','min:8', 'confirmed', Password::min(8)
                ->letters()->mixedCase()->numbers()->symbols()
            ],
        ]);

        User::create([
            'email'              => $request->email,
            'mobile'             => $request->mobile,
            'password'           => Hash::make($request->password),
            'national_code'      => $request->national_code,
            'first_name'         => $request->first_name,
            'last_name'          => $request->last_name,
            'slug'               => $request->slug,
            'profile_photo_path' => 'profile_photo_path',
            'activation'         => $request->activation,
            'user_type'          => $request->user_type,
        ]);

        return redirect()->route( 'user.index');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return string
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        if ($request->password){
            $request->validate([
                'password'
                => ['string',
                    'required',
                    'confirmed',
                    Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols(),
                ],
            ]);
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }
        else{
            $request->validate([
                'password'      => [],
            ]);
        }
        $user->update([
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'national_code'=>$request->national_code,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'slug'=>$request->slug,
            'profile_photo_path'=>'profile_photo_path',
            'activation'=>$request->activation,
        ]);

        return redirect()->route( 'user.edit' , $user->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return back();
    }
}
