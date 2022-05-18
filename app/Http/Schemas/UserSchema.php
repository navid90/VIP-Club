<?php
namespace App\Http\Schemas;

use Illuminate\Validation\Rules\Password;

class UserSchema
{
    public function userInputs()

    {
        return $userInputs = array(
            //first_name
            [
                'name' => 'first_name',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255', 'min:5', ],
                'insert' => true,
                'data' => 'string',
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
                'insert' => true,
                'data' => 'string',
                'show_index' => true,
                'show_edit' => true,
                'value'=> 'Ghavami',
            ],
            //email
            [
                'name' => 'email',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255', 'email','unique:users', ],
                'insert' => true,
                'data' => 'string',
                'show_index' => true,
                'show_edit' => true,
                'value'=> 'navid90@gmail.com',
            ],
            //mobile
            [
                'name' => 'mobile',
                'type' => 'text',
                'insert' => true,
                'data' => 'json',
                'rules' => ['nullable', 'numeric', 'digits:11',],
                'show_index' => true,
                'show_edit' => true,
                'value'=> '09362624635',
            ],
            //national_code
            [
                'name' => 'national_code',
                'type' => 'text',
                'insert' => true,
                'data' => 'json',
                'rules' => ['nullable', 'numeric', 'digits:10',],
                'show_index' => false,
                'show_edit' => true,
                'value'=> '2150152231',
            ],
            //password
            [
                'name' =>'password',
                'type' =>'password',
                'rules' => ['string', 'required', 'confirmed', Password::min(8)
//                    ->letters()->mixedCase()->numbers()->symbols(),
                ],
                'insert' => true,
                'data' => 'string',
                'show_index' => false,
                'show_edit' => true,
                'value'=> 'Ng080890@',
            ],
            //password_confirmation
            [
                'name' => 'password_confirmation',
                'type' => 'password',
                'insert' => false,
                'data' => null,
                'show_index' => false,
                'show_edit' => true,
                'value'=> 'Ng080890@',
            ],
            //slug
            [
                'name' => 'slug',
                'type' => 'text',
                'insert' => true,
                'data' => 'json',
                'rules' => ['nullable', 'string', 'max:255',],
                'show_index' => false,
                'show_edit' => true,
                'value'=> 'navid90',
            ],
            //profile_photo
            [
                'name' => 'profile_photo',
                'type' => 'file',
                'insert' => true,
                'data' => 'json',
                'rules' => ['mimes:jpg,bmp,png', 'file', 'max:2048',],
                'show_index' => false,
                'show_edit' => true,
            ],
            //activation
            [
                'name' => 'activation',
                'type' => 'select',
                'insert' => true,
                'data' => 'json',
                'choices' => [trans('letter.active'),trans('letter.inactive')],
                'rules' => ['required'],
                'show_index' => true,
                'show_edit' => true,
            ],
            //user_type
            [
                'name' => 'user_type',
                'type' => 'select',
                'insert' => true,
                'data' => 'json',
                'choices' => [trans('letter.customer'),trans('letter.admin'),'other'],
                'rules' => ['required'],
                'show_index' => true,
                'show_edit' => true,
            ],
            //age
            [
                'name' => 'age',
                'type' => 'date',
                'insert' => true,
                'data' => 'json',
                'show_index' => false,
                'show_edit' => true,
                'value'=> '1990-08-08',
            ],
            //submit
            [
                'name' => 'submit',
                'type' => 'submit',
                'insert' => false,
                'data' => null,
                'attr' => [ 'class' =>'form-control form-control-sm col-3 col-md-2 offset-md-2 offset-0 bg-primary ',],
                'show_index' => false,
                'show_edit' => false,
            ],
        );
    }
}

