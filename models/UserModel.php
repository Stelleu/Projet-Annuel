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

    public static function create($createUser)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $createUserQuery = $databaseConnection->prepare("INSERT INTO users(firstname,lastname, phone, email,passwd, status_user) VALUES(:firstname,:lastname, :phone, :email,:pwd, 'Admin');");
//        $code = rand(1000, 9999);
//        $_SESSION["code"] = $code;
        $createUserQuery->execute([$createUser]);
    }

     public static function connect(string $email, string $pwd){
         $databaseConnection = DatabaseSettings::getConnection();
         $queryPrepared = $databaseConnection->prepare("SELECT * FROM users WHERE email=:email");
         $queryPrepared->execute(["email"=>$email]);
         $results = $queryPrepared->fetch();
         print_r($results);
         if(empty($results)){
             return $results;
         }else if(password_verify($pwd, $results["passwd"]) && $results["status_user"]=="Admin"){
             $_SESSION["auth"]=true;
             $_SESSION["info"]=$results;
             header("Location: ../adminTemplate/pages/dashboard.html");
         }else{

             return $results=0;
         }
     }


    public static function findByEmail(string $email)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUserQuery = $databaseConnection->prepare("SELECT * FROM users WHERE email = :email");

        $getUserQuery->execute([
            "email" => $email
        ]);
        $results = $getUserQuery->fetch();
        $_SESSION["info"]=$results;
        $_SESSION["auth"]=true;
        return $results;
    }


    public static function findByPhone(int $phone)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUserQuery = $databaseConnection->prepare("SELECT * FROM users WHERE phone = :phone");
        $getUserQuery->execute([
            "phone" => $phone
        ]);

        $phone = $getUserQuery->fetch();

        return $phone;
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
        $updateUsersQuery = $databaseConnection->prepare("UPDATE users SET state= :etat WHERE idUser =:id");
        $updateUsersQuery->execute([
            "id" => $id ,
            "etat" => $recupdonnee
        ]);
    }



}