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
                'show-index' => true,
            ],
            //last_name
            [
                'name' => 'last_name',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255',],
                'show-index' => true,
            ],
            //email
            [
                'name' => 'email',
                'type' => 'text',
                'rules' => ['required', 'string', 'max:255', 'email', ],
//                'rules' => ['required', 'string', 'max:255', 'email','unique:users', ],
                'show-index' => true,
            ],
            //mobile
            [
                'name' => 'mobile',
                'type' => 'text',
                'rules' => ['nullable', 'numeric', 'digits:11',],
                'show-index' => true,
            ],
            //national_code
            [
                'name' => 'national_code',
                'type' => 'text',
                'rules' => ['nullable', 'numeric', 'digits:10',],
                'show-index' => true,
            ],
            //password
            [
                'name' =>'password',
                'type' =>'password',
                'rules' => ['string', 'required', 'confirmed', Password::min(8),
//                    ->letters()->mixedCase()->numbers()->symbols()
                'show-index' => false,
                ],
            ],
            //password_confirmation
            [
                'name' => 'password_confirmation',
                'type' => 'password',
                'show-index' => false,
            ],
            //slug
            [
                'name' => 'slug',
                'type' => 'text',
                'rules' => ['nullable', 'string', 'max:255',],
                'show-index' => false,
            ],
            //profile_photo
            [
                'name' => 'profile_photo',
                'type' => 'file',
                'rules' => ['mimes:jpg,bmp,png', 'file', 'max:2048',],
                'show-index' => false,
            ],
            //activation
            [
                'name' => 'activation',
                'type' => 'select',
                'choices' => [trans('letter.active'),trans('letter.inactive')],
                'rules' => ['required'],
                'show-index' => true,
            ],
            //user_type
            [
                'name' => 'user_type',
                'type' => 'select',
                'choices' => [trans('letter.customer'),trans('letter.admin'),'other'],
                'rules' => ['required'],
                'show-index' => true,
            ],
            //age
            [
                'name' => 'age',
                'type' => 'date',
                'show-index' => true,
            ],
            //submit
            [
                'name' => 'submit',
                'type' => 'submit',
                'attr' => [ 'class' =>'form-control form-control-sm col-3 col-md-2 offset-md-2 offset-0 bg-primary ',],
                'show-index' => false,
            ],
        );
    }
}

