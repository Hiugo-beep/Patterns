<?php

class Factory
{
    public static function createUsers($role)
    {
        if (class_exists($role)) {
            return new $role;
        } else {
            throw new Exception('Role' . $role . ' not exist!');
        }

    }
}
