<?php
    define("DB_DSN", "mysql:host=localhost;dbname=u486471496_easyscooter");
    define("DB_USERNAME", "u486471496_admeasyscooter");
    define("DB_PASSWORD", "3HsbMJXtF7rLGfaq");
    
class Mapping
{
    public function close_reservation($idRide){
        
        
        // calculo distancia para despues actualizar el kilometraje del scooter
        $sql = "SELECT TIMESTAMPDIFF(SECOND, start_time, NOW()) as  seconds, 
                       TIMESTAMPDIFF(MINUTE, start_time, NOW()) as  minutes ,
                       number_scooter,
                       idUser
                       FROM rides WHERE idRide = $idRide ";
        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $valid = $stmt->fetch(PDO::FETCH_OBJ);
            $time_used = $valid->seconds;
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo $sql;
        }

        $distance = round((($time_used * 30000) / 3600)/1000);

        $minutes = $valid->minutes;
        $cost = round(1 + (0.23 * $minutes));

        $sql = "UPDATE rides SET status = 2, distance = '$distance', price = '$cost', end_time = NOW() WHERE idRide = $idRide";
        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $con->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo $sql;
        }

        $sql = "UPDATE scooters SET km = (km + $distance) , status = 1 WHERE idScooter = $valid->number_scooter";
        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $con->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo $sql;
        }

        // calculate reward points
        $extra_points = 0;
        $points = 0;
        if($cost >= 100){
            $extra_points = round(($cost/100),0);
        }
        $points = $cost * 0.3;
        $total_points = round(($points + $extra_points),1);

        $sql = "UPDATE users SET points = (points + $total_points) WHERE idUser = $valid->idUser";
        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $con->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo $sql;
        }


        $res = array("cost" => $cost,"distance" => $distance,"minutes" => $minutes,"total_points" => $total_points);

        return $res;
        //Un servicio a 1€ el desbloqueo de monopatín y 23 céntimos el minuto

    }

    public function get_reservation($userId){
        
        $sql = "SELECT  idRide, TIMESTAMPDIFF(SECOND, start_time, NOW()) as  seconds FROM rides WHERE idUser = $userId AND status = 1 ";
        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $valid = $stmt->fetch(PDO::FETCH_OBJ);
            return $valid;
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo "login function error";
        }
    }
    
    public function set_reservation($scooter,$lat,$lng,$userId){
        
        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO rides SET idUser = $userId, status = 1, start_lat = '$lat',start_lng = '$lng', start_time = NOW(), number_scooter = $scooter";
            $stmt = $con->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            
        }

        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE scooters SET status = 0 WHERE idScooter = $scooter";
            $stmt = $con->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return 1;
    }

    public function get_this_scooter($scooter){
        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM scooters WHERE idScooter = $scooter";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $valid = $stmt->fetch(PDO::FETCH_OBJ);
            return $valid;
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo "login function error";
        }
    }
    public function get_scooters(){
        try {
            $con = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM scooters WHERE status = 1";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $valid = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $valid;
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo "login function error";
        }
    }

}


$mp = NEW Mapping;


