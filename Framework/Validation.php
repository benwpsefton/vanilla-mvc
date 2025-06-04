<?php

/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        TITLE.php
 * Location:
 * Project:         vanilla-mvc
 * Date Created:    01/05/2025
 *
 * Author:          ben sefton <20127535@tafe.wa.edu.au>
 *
 */

namespace Framework;


class Validation
{
    public static function string($value, $min = 1, $max = INF)
    {
        if (is_string($value)) {
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max;
        }

        return false;
    }
    public static function email($value)
    {
        $value = trim($value);

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    public static function match($value1, $value2)
    {
        $value1 = trim($value1);
        $value = trim($value2);

        return $value1 === $value2;
    }
}