<?php
include __DIR__ . "/../controllers/user.php";

class Token
{
public static function isConnected($user): bool
{
    echo "cc";
    print_r($user);
    //Est-ce qu'il y a un token
    if(empty($user)){
        return false;}
    else{
        echo $user["token"];
        return true;

    }
}

  public static function redirectIfNotConnected(){
        if(!Token::isConnected()){
            header("Location: index.php");
            die();
        }
    }
}