<?php

/**
 * Created by PhpStorm.
 * User: mac-intern
 * Date: 11/12/17
 * Time: 12:03 PM
 */
namespace brooke\Contact;

use brooke\Rules\Rules;

trait ContactRules
{

    use Rules;

    public function validateContact($request)
    {

        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'inquiry' => 'required',
            'message' => 'required',
        ];

        return $this->verdict($request, $rules);

    }
}