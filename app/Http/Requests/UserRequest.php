<?php

namespace App\Http\Requests;

use App\Http\Schemas\UserSchema;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $userHelper = new UserSchema();
        $userInputs = $userHelper->userInputs();
        $userRules = [];

        foreach ($userInputs as $userInput)
        {
            if (array_key_exists('rules',$userInput))
            {
                $userRule =[$userInput['name'] => $userInput['rules']] ;

                $userRules =  $userRules +  $userRule;
            }

        }

        return $userRules;

    }
}
