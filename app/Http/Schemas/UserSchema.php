<?php
namespace App\Http\Schemas;

use Illuminate\Validation\Rules\Password;

class UserSchema
{
    public function userColumns()

    {
        return $userColumns = array(

            //first_name
            [
                'name' => 'first_name',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255', 'min:5', ],
                'show_index' => true,
                'show_edit' => true,
                'searchable' => true,
                'value'=> 'Navid',
            ],

            //last_name
            [
                'name' => 'last_name',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255',],
                'show_index' => true,
                'show_edit' => true,
                'value'=> 'Ghavami',
            ],

            //email
            [
                'name' => 'email',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255', 'email','unique:users', ],
                'show_index' => true,
                'show_edit' => true,
                'value'=> 'navid90@gmail.com',
            ],

            //password
            [
                'name' =>'password',
                'type' =>'password',
                'rules' => ['string', 'required', 'confirmed', Password::min(8)
//                    ->letters()->mixedCase()->numbers()->symbols(),
                ],
                'show_index' => false,
                'show_edit' => true,
                'value'=> 'Ng080890@',
            ],

            //password_confirmation
            [
                'name' => 'password_confirmation',
                'type' => 'password',
                'show_index' => false,
                'show_edit' => true,
                'value'=> 'Ng080890@',
            ],
        );
    }

    public function userDataSet()
    {
        return $userDataSet = array(

            //mobile
            [
                'name' => 'mobile',
                'type' => 'text',
                'rules' => ['nullable', 'numeric', 'digits:11',],
                'show_index' => true,
                'show_edit' => true,
                'value'=> '09362624635',
            ],

            //national_code
            [
                'name' => 'national_code',
                'type' => 'text',
                'rules' => ['nullable', 'numeric', 'digits:10',],
                'show_index' => true,
                'show_edit' => true,
                'value'=> '2150152231',
            ],

            //slug
            [
                'name' => 'slug',
                'type' => 'text',
                'rules' => ['nullable', 'string', 'max:255',],
                'show_index' => false,
                'show_edit' => true,
                'value'=> 'navid90',
            ],

            //profile_photo
            [
                'name' => 'profile_photo',
                'type' => 'file',
                'rules' => ['mimes:jpg,bmp,png', 'file', 'max:2048',],
                'show_index' => false,
                'show_edit' => true,
            ],

            //activation
            [
                'name' => 'activation',
                'type' => 'select',
                'choices' => [trans('letter.active'),trans('letter.inactive')],
                'rules' => ['required'],
                'show_index' => true,
                'show_edit' => true,
            ],

            //user_type
            [
                'name' => 'user_type',
                'type' => 'select',
                'choices' => [trans('letter.customer'),trans('letter.admin'),'other'],
                'rules' => ['required'],
                'show_index' => true,
                'show_edit' => true,
            ],

            //age
            [
                'name' => 'age',
                'type' => 'date',
                'show_index' => true,
                'show_edit' => true,
                'value'=> '1990-08-08',
            ],

            //submit
            [
                'name' => 'submit',
                'type' => 'submit',
                'attr' => [ 'class' =>'form-control form-control-sm col-3 col-md-2 offset-md-2 offset-0 bg-primary ',],
                'show_index' => false,
                'show_edit' => false,
            ],
        );

    }
}

