<?php
class Admin{
    protected $addAdmin = true;
    protected $addModerators = true;
    protected $addPost = true;
    protected $addComments = true;
}
class Moderator{
    protected $addAdmin = false;
    protected $addModerators = false;
    protected $addPost = true;
    protected $addComments = true;
}
class User{
    protected $addAdmin = false;
    protected $addModerators = false;
    protected $addPost = false;
    protected $addComments = true;
}
class Guest{
    protected $addAdmin = false;
    protected $addModerators = false;
    protected $addPost = false;
    protected $addComments = false;
}

$role = 'User';

/*switch ($role) {
    case 'Admin':
        $login = new Admin();
        break;
    case 'Moderator':
        $login = new Moderator();
        break;
    case 'User':
        $login = new User();
        break;
    case 'Guest':
        $login = new Guest();
        break;
    default:
        break;
}

var_dump($login);
*/

class Factory{
    public static function createUsers($role){
        if(class_exists($role)) {
            return new $role;
        } else {
            throw new Exception('Role'.$role.' not exist!');
        }

    }
}

$login = Factory::createUsers($role);
var_dump($login);