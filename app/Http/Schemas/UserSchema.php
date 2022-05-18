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
                'show_index' => true,
                'show_edit' => true,
                'searchable' => true,
                'value'=> 'navid-s',
            ],
            //last_name
            [
                'name' => 'last_name',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255',],
                'show_index' => true,
                'show_edit' => true,
                'value'=> 'ghavami-s',
            ],
            //email
            [
                'name' => 'email',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255', 'email', ],
//                'rules' => ['required', 'string', 'max:255', 'email','unique:users', ],
                'show_index' => true,
                'show_edit' => true,
                'value'=> 'navid@g.s',
            ],
//            //mobile
//            [
//                'name' => 'mobile',
//                'type' => 'text',
//                'rules' => ['nullable', 'numeric', 'digits:11',],
//                'show_index' => true,
//                'show_edit' => true,
//            ],
//            //national_code
//            [
//                'name' => 'national_code',
//                'type' => 'text',
//                'rules' => ['nullable', 'numeric', 'digits:10',],
//                'show_index' => false,
//                'show_edit' => true,
//            ],
            //password
            [
                'name' =>'password',
                'type' =>'password',
//                'rules' => ['string', 'required', 'confirmed', Password::min(8)
//                    ->letters()->mixedCase()->numbers()->symbols(),
//                ],
                'show_index' => false,
                'show_edit' => true,
                'value'=> '11111111',
            ],
            //password_confirmation
            [
                'name' => 'password_confirmation',
                'type' => 'password',
                'show_index' => false,
                'show_edit' => true,
                'value'=> '11111111',
            ],
//            //slug
//            [
//                'name' => 'slug',
//                'type' => 'text',
//                'rules' => ['nullable', 'string', 'max:255',],
//                'show_index' => false,
//                'show_edit' => true,
//            ],
//            //profile_photo
//            [
//                'name' => 'profile_photo',
//                'type' => 'file',
//                'rules' => ['mimes:jpg,bmp,png', 'file', 'max:2048',],
//                'show_index' => false,
//                'show_edit' => true,
//            ],
//            //activation
//            [
//                'name' => 'activation',
//                'type' => 'select',
//                'choices' => [trans('letter.active'),trans('letter.inactive')],
//                'rules' => ['required'],
//                'show_index' => true,
//                'show_edit' => true,
//            ],
//            //user_type
//            [
//                'name' => 'user_type',
//                'type' => 'select',
//                'choices' => [trans('letter.customer'),trans('letter.admin'),'other'],
//                'rules' => ['required'],
//                'show_index' => true,
//                'show_edit' => true,
//            ],
//            //age
//            [
//                'name' => 'age',
//                'type' => 'date',
//                'show_index' => false,
//                'show_edit' => true,
//            ],
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

