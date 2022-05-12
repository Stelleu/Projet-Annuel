<?php
include __DIR__."/../database/setting.php";

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
        echo "cc";
        $databaseConnection = DatabaseSettings::getConnection();
        $createUserQuery = $databaseConnection->prepare("INSERT INTO users(firstname,lastname, phone, email,passwd, status_user) VALUES(:firstname,:lastname, :phone, :email,:pwd, 'Admin');");
//        $code = rand(1000, 9999);
//        $_SESSION["code"] = $code;
        $createUserQuery->execute($createUser);
    }



    public static function findByEmail(string $email)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUserQuery = $databaseConnection->prepare("SELECT * FROM users WHERE email = :email");
        $getUserQuery->execute([
            "email" => $email
        ]);
        return $getUserQuery->fetch();
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
    session_start();
	session_destroy();
    }


    public static function  updateOneById($id, $user){
       $set = [];
       $allowedKeys = ["firstname","lastname","phone","email","passwd","status_user","address","points","wallet","birthdate","zipcode","state","check"];
       foreach ($user as $key => $value){
           if (!in_array($key, $allowedKeys)){
               continue;
           }
           $set[]  = "$key = :$key";
       }
       $set = implode(",",$set);
        $databaseConnection = DatabaseSettings::getConnection();
        $updateUsersQuery = $databaseConnection->prepare("UPDATE users SET $set WHERE idUser =:id");
        $updateUsersQuery->execute(array_merge(["id" => $id], $user));
    }
}
