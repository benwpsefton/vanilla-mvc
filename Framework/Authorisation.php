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

class Authorisation
{
    public static function isOwner($resourceId)
    {
        $sessionUser = Session::get('user');

        if ($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserId = (int)$sessionUser['id'];
            return $sessionUserId === $resourceId;
        }

        return false;
    }
}