<?php
include __DIR__."\..\models\UserModel.php";

if (isset($_POST["subject"],$_POST["id_user"])) {
    $id_user = $_POST["id_user"];
    $recupdonnee=$_POST["subject"];
    User::status($id_user, $recupdonnee);
}

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
        echo $recupdonnee;
       if ($recupdonnee == 3) {
            try {
                /*$status = UserModel::deleteUser($id);
                include 'view\userlist.php';
*/

            } catch (PDOException $exception) {
                $exception->getMessage();
            }
        }else{
            try {
                echo "ccc";
                $status = UserModel::updateUser($id, $recupdonnee);
                include 'view\userlist.php';


            } catch (PDOException $exception) {
                $exception->getMessage();
            }
        }
   }

}

        
    

