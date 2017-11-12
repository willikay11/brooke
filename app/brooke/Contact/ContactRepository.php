<?php

/**
 * Created by PhpStorm.
 * User: mac-intern
 * Date: 11/10/17
 * Time: 6:08 PM
 */
namespace brooke\Contact;

use brooke\Models\Contact;

class ContactRepository
{

    public function save(array $input)
    {
        return Contact::create($input);
    }
}