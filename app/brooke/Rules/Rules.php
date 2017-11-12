<?php

/**
 * Created by PhpStorm.
 * User: mac-intern
 * Date: 11/12/17
 * Time: 12:02 PM
 */

namespace brooke\Rules;

use Validator;

trait Rules
{
    /*
     * Overall validation checker depending on the passed request and rules
     */
    public function verdict($request, $rules, $messages = []){
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails())
        {
            return $validator;
        }
    }
}