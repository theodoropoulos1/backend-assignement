<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class isLatValid implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pattern ='/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/';
        
        return  preg_match( $pattern, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not  valid.';
    }
}