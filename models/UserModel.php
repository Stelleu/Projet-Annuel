<?php
include __DIR__."\..\database\setting.php";

class UserModel
{
    public static function getAll()
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUsersQuery = $databaseConnection->query("SELECT idUser, firstname, lastname, phone, email, status_user, address, zipcode, birthdate, points, wallet, state FROM users;");
        $users = $getUsersQuery->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public static function create($user)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        /* $firstname = $userToCreate["firstname"];
         $lastname = $userToCreate["lastname"];
         $phone = $userToCreate["phone"];
         $email = $userToCreate["email"];
         $password = password_hash($userToCreate["password"], PASSWORD_BCRYPT);*/
//
        $createUserQuery = $databaseConnection->prepare("INSERT INTO users(firstname,lastname, phone, email,password, status_user) VALUES(:firstname,:lastname, :phone, :email,:password, 'Admin');");
        $createUserQuery->execute($user);
        /* $createUserQuery->execute([
         ]);

     public static function connexion(string $email, string $password){
         $databaseConnection = DatabaseSettings::getConnection();*/

    }



    public static function findByEmail(string $email)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUserQuery = $databaseConnection->prepare("SELECT * FROM users WHERE email = :email");

        $getUserQuery->execute([
            "email" => $email
        ]);

        $user = $getUserQuery->fetch();

        return $user;
    }

    public static function deleteUser(int $id){
        echo $id;
        $databaseConnection = DatabaseSettings::getConnection();
        echo "bdd ok";
        $deleteUsersQuery = $databaseConnection->prepare("DELETE FROM users WHERE idUser =:id");
        $deleteUsersQuery->execute(["id"=>$id]);
        return $info= "L'utilisateur a bien été supprimé";
    }

    public static function updateUser(int $id, int $recupdonnee){
        $databaseConnection = DatabaseSettings::getConnection();
        echo"bddok";
        $updateUsersQuery = $databaseConnection->prepare("UPDATE users SET state= :etat WHERE idUser =:id");
        $updateUsersQuery->execute([
            "id" => $id ,
            "etat" => $recupdonnee
        ]);
        echo"ok";

    }



}