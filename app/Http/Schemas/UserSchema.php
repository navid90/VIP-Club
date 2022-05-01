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
            ],
            //last_name
            [
                'name' => 'last_name',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255',],
            ],
//            //email
//            [
//                'name' => 'email',
//                'type' => 'text',
//                'rules' => ['required', 'string', 'max:255', 'email', ],
////                'rules' => ['required', 'string', 'max:255', 'email','unique:users', ],
//            ],
//            //mobile
//            [
//                'name' => 'mobile',
//                'type' => 'text',
//                'rules' => ['nullable', 'numeric', 'digits:11',],
//            ],
//            //national_code
//            [
//                'name' => 'national_code',
//                'type' => 'text',
//                'rules' => ['nullable', 'numeric', 'digits:10',],
//            ],
//            //password
//            [
//                'name' =>'password',
//                'type' =>'password',
//                'rules' => ['string', 'required', 'confirmed', Password::min(8)
////                    ->letters()->mixedCase()->numbers()->symbols()
//                ],
//            ],
//            //password_confirmation
//            [
//                'name' => 'password_confirmation',
//                'type' => 'password',
//            ],
//            //slug
//            [
//                'name' => 'slug',
//                'type' => 'text',
//                'rules' => ['nullable', 'string', 'max:255',],
//            ],
//            //profile_photo
//            [
//                'name' => 'profile_photo',
//                'type' => 'file',
//                'rules' => ['mimes:jpg,bmp,png', 'file', 'max:2048',],
//            ],
//            //activation
//            [
//                'name' => 'activation',
//                'type' => 'select',
//                'choices' => [trans('letter.active'),trans('letter.inactive')],
//                'rules' => ['required'],
//            ],
//            //user_type
//            [
//                'name' => 'user_type',
//                'type' => 'select',
//                'choices' => [trans('letter.customer'),trans('letter.admin'),'other'],
//                'rules' => ['required'],
//            ],
            //submit
            [
                'name' => 'submit',
                'type' => 'submit',
                'attr' => [ 'class' =>'form-control form-control-sm col-3 col-md-2 offset-md-2 offset-0 bg-primary ',],
            ],
        );
    }
}

