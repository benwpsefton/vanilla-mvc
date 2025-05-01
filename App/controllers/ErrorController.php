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

namespace App\controllers;

class ErrorController
{
    public static function notFound($message = 'Resource not found')
    {
        http_response_code(404);

        loadView('error', [
            'status' => '404',
            'message' => $message
        ]);
    }
    public static function unauthorized($message = 'You are not authorized to view this resource')
    {
        http_response_code(403);

        loadView('error', [
            'status' => '403',
            'message' => $message
        ]);
    }
}