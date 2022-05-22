<?php

namespace App\Http\Forms;

use App\Http\Schemas\UserSchema;
use Illuminate\Validation\Rules\Password;
use Kris\LaravelFormBuilder\Form;
use PhpParser\Node\Expr\BinaryOp\Concat;

class UserForm extends Form
{

    public function buildForm()
    {

        /**
         * Create a new field and add it to the user form.
         *
         */

        $userColumns = (new UserSchema()) -> userColumns();
        $userDataSet = (new UserSchema()) -> userDataSet();
        $userInputs = array_merge($userColumns,$userDataSet);

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
