<?php
include __DIR__."\..\models\UserModel.php"; 

class User
{
    /**
     * @example
     * User::get();
     */
    public static function get()
    {
        $users = UserModel::getAll();
        include 'view\userlist.php';
    }

    public static function status(int $id, int $recupdonnee)
    {
        if ($recupdonnee = 3) {
            if ($status = UserModel::deleteUser($id)) {
                return;
            }

            include 'view\userlist.php';
        } else {
            $status = UserModel::updateUser($_POST['id_user'], $recupdonnee);
            echo $recupdonnee;
            include 'view\userlist.php';
        }
    }
}

        //sort
        
    

