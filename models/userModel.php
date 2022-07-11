<?php
include __DIR__."/../database/setting.php";

class UserModel
{
    public static function getAll(): bool|array
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUsersQuery = $databaseConnection->query("SELECT idUser, firstname, lastname, phone, email, status_user, address, zipcode, birthdate, points, wallet, state FROM users;");
        return $getUsersQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($createUser): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $createUserQuery = $databaseConnection->prepare("INSERT INTO users(firstname,lastname, phone, email,passwd, status_user,subscription) VALUES(:firstname,:lastname, :phone, :email,:pwd, :status_user, :subscription);");
        $createUserQuery->execute($createUser);
        return 1;
    }



    public static function findByEmail(string $email)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUserQuery = $databaseConnection->prepare("SELECT * FROM users WHERE email = :email");
        $getUserQuery->execute([
            "email" => $email
        ]);
        return $getUserQuery->fetch(PDO::FETCH_ASSOC);
    }

    public static function getOneByToken($token)

    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("SELECT * FROM users WHERE token = :token");
        $query->execute([
            "token" => $token
        ]);
        return $query->fetch();
    }

    public static function findByPhone(int $phone)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUserQuery = $databaseConnection->prepare("SELECT * FROM users WHERE phone = :phone");
        $getUserQuery->execute([
            "phone" => $phone
        ]);
        return $getUserQuery->fetch();
    }

    public static function deleteUser(int $id): string
    {
        echo $id;
        $databaseConnection = DatabaseSettings::getConnection();
        echo "bdd ok";
        $deleteUsersQuery = $databaseConnection->prepare("DELETE FROM users WHERE idUser =:id");
        $deleteUsersQuery->execute(["id"=>$id]);
        return $info= "L'utilisateur a bien été supprimé";
    }

    public static function logout(){
        echo "cc";
    session_start();
    unset($_SESSION["info"]);
    session_destroy();

    }


    public static function  updateOneById($id, $user){
       $set = [];
       $allowedKeys = ["firstname","lastname","phone","email","passwd","status_user","address","points","wallet","birthdate","zipcode","state","check","token"];
       foreach ($user as $key => $value){
           if (!in_array($key, $allowedKeys)){
               continue;
           }
           $set[]  = "$key = :$key";
       }
       $set = implode(",",$set);
        $databaseConnection = DatabaseSettings::getConnection();
        $updateUsersQuery = $databaseConnection->prepare("UPDATE users SET $set WHERE idUser =:id");
        return $updateUsersQuery->execute(array_merge(["id" => $id], $user));
    }
    public static function addUser($user){
        print_r($user);
        $set = [];
        $set2 = [];
        $allowedKeys = ["firstname","lastname","phone","email","passwd","status_user","address","points","wallet","birthdate","zipcode","state","check","token"];
        foreach ($user as $key => $value){
            echo $key;
            if (!in_array($key, $allowedKeys)){
                continue;
            }
            $set[]  = ":$key";
            $set2[]  = "$key";
        }
        $set = implode(",",$set);
        $set2 = implode(",",$set2);
        echo $set2;
        $databaseConnection = DatabaseSettings::getConnection();
        $updateUsersQuery = $databaseConnection->prepare("INSERT INTO users($set2) VALUES($set);");
        return $updateUsersQuery->execute($user);

//        scooterModel::addScooter($number,$condition,$status,$workzoneLabel);
        header("Location: ../tables");
    }

}

