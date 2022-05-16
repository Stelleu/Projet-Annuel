<?php

class Token
{
public static function isConnected(){
    //Est-ce qu'il y a un token
    if(empty($_SESSION["token"]))
        return false;
    $databaseConnection = DatabaseSettings::getConnection();

    $queryPrepared = $databaseConnection->prepare( "SELECT id FROM iw_user WHERE token=:token AND id=:id");

    $queryPrepared->execute([
        "token"=>$_SESSION["token"],
        "id"=>$_SESSION["idUser"]
    ]);

    return $queryPrepared->fetch();
}

  public static function redirectIfNotConnected(){
        if(!Token::isConnected()){
            header("Location: index.php");
            die();
        }
    }
}