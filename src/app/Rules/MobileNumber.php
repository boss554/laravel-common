<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MobileNumber implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $mobile_number_digit  =  config('validation::validation.mobile_number_digit');
        return preg_match('/^\+[0-9]{2,3}\-[0-9]{10}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        // Return the error message when the validation fails
        return 'The :attribute must be a valid mobile number.';
    }
}
