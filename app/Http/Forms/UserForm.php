<?php

namespace App\Http\Forms;

use App\Http\Schemas\UserSchema;
use Illuminate\Validation\Rules\Password;
use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {

        /**
         * Create a new field and add it to the user form.
         *
         */

        $userHelper = new UserSchema();

        $userInputs= $userHelper -> userInputs();

        foreach ($userInputs as $userInput)
        {
            $userInput['label'] = trans('letter.'.$userInput['name']);
            if (!array_key_exists('attr',$userInput))
            {
                $userInput['attr'] = [ 'class' =>'form-control form-control-sm col-12 col-md-6 offset-md-2',];
            }
            $this->add($userInput['name'], $userInput['type'] , $userInput, );
        }
    }
}
