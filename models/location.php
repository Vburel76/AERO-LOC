<?php


class Location extends DataBase
{
    private int $_location_id;
    private string $_location_start;
    private string $_location_end;
    private string $_location_departure;
    private string $_location_arrival;
    private string $_location_validate;
    private int $_user_id;
    private int $_plane_id;


    // Mise en place des getters / setters 
    public function get_location_id()
    {
        return $this->_location_id;
    }

    public function set_location_id($_location_id)
    {
        $this->_location_id = $_location_id;
    }


    public function get_location_start()
    {
        return $this->_location_start;
    }

    public function set_location_start($_location_start)
    {
        $this->_location_start = $_location_start;
    }

    public function get_location_end()
    {
        return $this->_location_end;
    }

    public function set_location_end($_location_end)
    {
        $this->_location_end = $_location_end;
    }

    public function get_location_departure()
    {
        return $this->_location_departure;
    }

    public function set_location_departure($_location_departure)
    {
        $this->_location_departure = $_location_departure;
    }

    public function get_location_arrival()
    {
        return $this->_location_arrival;
    }

    public function set_location_arrival($_location_arrival)
    {
        $this->_location_arrival = $_location_arrival;
    }

    public function get_location_validate()
    {
        return $this->_location_validate;
    }

    public function set_location_validate($_location_validate)
    {
        $this->_location_validate = $_location_validate;
    }

    public function get_user_id()
    {
        return $this->_user_id;
    }

    public function set_user_id($_user_id)
    {
        $this->_user_id = $_user_id;
    }

    public function get_plane_id()
    {
        return $this->_plane_id;
    }

    public function set_plane_id($_plane_id)
    {
        $this->_plane_id = $_plane_id;
    }


    //  methode pour ajouter un rendez vous 
    public function addvalidate(string $_location_start, string $_location_periode, string $_location_departure, string $_location_arrival, string $_user_id, string $_plane_id): void
    {
        $pdo = parent::connectDb();

        $sql = "INSERT INTO `location` (`location_start`,`location_periode`,`location_departure`, `location_arrival`,`user_id_user`,`plane_id_plane`)
        VALUES (:start, :periode, :departure, :arrival, :userId, :planeId)";

        $query = $pdo->prepare($sql);

        $query->bindValue(':start', $_location_start, PDO::PARAM_STR);
        $query->bindValue(':periode', $_location_periode, PDO::PARAM_STR);
        $query->bindValue(':departure', $_location_departure, PDO::PARAM_STR);
        $query->bindValue(':arrival', $_location_arrival, PDO::PARAM_STR);
        $query->bindValue(':userId', $_user_id, PDO::PARAM_INT);
        $query->bindValue(':planeId', $_plane_id, PDO::PARAM_INT);

        $query->execute();
    }

    public function returnValidate()
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `location` INNER JOIN `user` ON `user_id_user` = `user_id` INNER JOIN `plane` ON `plane_id_plane` = `plane_id`";

        $query = $pdo->query($sql);

        $query->execute();

        $result = $query->fetchAll();

        return $result;
    }

    public function returnUserValidate($user_id)
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `location` INNER JOIN `user` ON `user_id_user` = `user_id` INNER JOIN `plane` ON `plane_id_plane` = `plane_id` WHERE `user_id` =:user_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':user_id', $user_id, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetchAll();

        return $result;
    }

    public function checkIfDateExists(string $start): bool
    {
        $pdo = parent::connectDb();

        $sql = "SELECT `location_start` FROM `location` WHERE `location_start` = :start";
        
        $query = $pdo->prepare($sql);

        $query->bindValue(':start', $start, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetchAll();

        if (count($result) != 0) {
            return true;
        } else {
            return false;
        }
    }

    public function returnPlaneValidate($plane_id)
    {
        $pdo = parent::connectDb();

        $sql = "SELECT `location_start`,`location_periode`,`location_departure`,`location_arrival` FROM `location` INNER JOIN `plane` ON `plane_id_plane` = `plane_id` WHERE `plane_id` =:plane_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':plane_id', $plane_id, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetchAll();

        return $result;
    }

    public function returnOnelocation($location_id)
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `location` INNER JOIN `user` ON `user_id_user` = `user_id` INNER JOIN `plane` ON `plane_id_plane` = `plane_id` WHERE `location_id` =:location_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':location_id', $location_id, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetchAll();

        return $result[0];
    }

    public function modifLocValidate(string $locationStart, string $locationEnd, string $locationDeparture, string $locationArrival, int $locationId): void
    {
        $pdo = parent::connectDb();

        $sql = "UPDATE `location` SET `location_start`=:location_start ,`location_end`=:location_end ,`location_departure`=:location_departure,`location_arrival`=:location_arrival  WHERE `location_id` =:location_id";

        $query = $pdo->prepare($sql);$

        $query->bindValue(':location_start', $locationStart, PDO::PARAM_STR);
        $query->bindValue(':location_end', $locationEnd, PDO::PARAM_STR);
        $query->bindValue(':location_departure', $locationDeparture, PDO::PARAM_STR);
        $query->bindValue(':location_arrival', $locationArrival, PDO::PARAM_STR);
        $query->bindValue(':location_id', $locationId, PDO::PARAM_INT);

        $query->execute();
    }

    public function deleteLocation(string $locationId): void
    {
        $pdo = parent::connectDb();

        $sql = "DELETE	FROM `location` WHERE `location_id` =:location_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':location_id', $locationId, PDO::PARAM_STR);

        $query->execute();
    }
}
