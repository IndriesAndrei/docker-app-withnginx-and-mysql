<?php

class Validate
{
    public static function escape($input)
    {
        $input = trim($input);
        $input = stripcslashes($input);
        $input = htmlentities($input, ENT_QUOTES);
        return $input;
    }

    public static function filterEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function myClass()
    {
        return "My Class is here!";
    }
}