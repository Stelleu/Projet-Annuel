<?php

class Token
{
public static function isConnected(): bool
{
    //Est-ce qu'il y a un token
    if(isset($_SESSION["info"]["token"])){
        return 1;
    } else{
  return 0;

    }
}

  public static function redirectIfNotConnected(){
        if(!Token::isConnected()){
            header("Location: index.php");
            die();
        }
    }
}