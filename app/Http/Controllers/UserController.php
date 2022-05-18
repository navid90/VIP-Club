<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Datatables\UserDatatable;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Http\Forms\UserForm;
use App\Http\Schemas\UserSchema;
use Yajra\DataTables\Facades\DataTables;
use function Spatie\Ignition\Config\toArray;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @param UserDatatable $datatable
     * @return \Illuminate\Http\JsonResponse|mixed
     *
     */

    public function index()
    {
        $users=User::all();
        $userInputs = (new UserSchema())->userInputs();
        return view('user.index',compact('users','userInputs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(UserForm :: class ,
            [
                'method' => 'POST',
                'url' => route('user.store'),
            ] ,
        );

        return view('user.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(UserRequest $request)
    {
//        $request->validate([
//            'email'         => ['unique:users',],
//        ]);

        $data= $request->all();
        $data['password'] = Hash::make($data['password']);
        unset($data['password_confirmation']);
        $user = new User();
        $user['data'] = $data;
        $user->save();
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
    public function edit(FormBuilder $formBuilder ,$id)
    {
        $form = $formBuilder->create(UserForm::class,
            [
                'method' => 'PUT',
                'url' => route('user.update',$id),
            ]
        );
        $user = User::all()->find($id);
        return view('user.edit', compact('form','user'));



//        $result = IndustryType::findOrFail($id);
//        $form = $formBuilder->create('employment_bank\\Forms\\IndustryTypeForm', ['method' => 'PUT', 'model' => $result, 'url' => route($this->route . 'update', $id)])->remove('save');
//        //->setData('market_values', $markets);
//        return view($this->content . 'edit', compact('form'));

//        $form = $formBuilder->create(UserForm::class,
//            [
//                'method' => 'PUT',
//                'url' => route('user.store',$id),
//            ]
//
//        );
//
//        return view('user.edit', compact('form'));



//        $user = User::find($id);
//
//        return view('user.edit', compact('user'));
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

    public function userDatatable()
    {
        return view('user.user-datatable');
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return \Yajra\DataTables\DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function index_datatable(UserDatatable $datatable)
    {
        return $datatable->render('user.index-datatable');
    }

}
