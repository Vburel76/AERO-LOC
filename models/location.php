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


    /**
     * Permet d'ajouter une réservation  
     * 
     * @param string $_location_start ID de la date de souhaitée.
     * * @param string $_location_periode ID de la période souhaitée.
     * * @param string $_location_departure ID du lieu de départ.
     * * @param string $_location_arrival ID du lieu d'arrivée.
     * * @param int $_user_id ID du user.
     * * @param int $_plane_id ID de l'avion.
     */
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

    /**
     * Permet d'afficher la liste de toutes les reservations  
     * 
     * 
     */
    public function returnValidate()
    {
        $pdo = parent::connectDb();

        $sql = "SELECT *  FROM `location` INNER JOIN `user` ON `user_id_user` = `user_id` INNER JOIN `plane` ON `plane_id_plane` = `plane_id`";

        $query = $pdo->query($sql);

        $query->execute();

        $result = $query->fetchAll();

        return $result;
    }


    /**
     * Permet d'afficher les reservations de l'utilisateur connecté'  
     * 
     * @param int $user_id ID du user.
     */
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


    /**
     * Permet de verifier si la date de départ existe dans la BDD  
     * 
     * @param string $start variable de la date de depart.
     */
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


    /**
     * Permet d'afficher les informations de la reservation en fonction de son ID 
     * 
     * @param int $plane_id L'id de l'avion'.
     */
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

    /**
     * Permet d'afficher les informations de la reservation en fonction de son ID 
     * 
     * @param int $location_id L'id de la location.
     */
    public function returnOnelocation($location_id)
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `location` INNER JOIN `user` ON `user_id_user` = `user_id` INNER JOIN `plane` ON `plane_id_plane` = `plane_id` WHERE `location_id` =:location_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':location_id', $location_id, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetchAll();

        if ($result == false) {
            return false;
        } else {
            // je return le resultat
            return $result[0];
        }
    }

    /**
     * Permet de modifier la reservation 
     * 
     * 
     */
    public function modifLocValidate(string $locationStart, string $locationPeriode, string $locationDeparture, string $locationArrival, int $locationId): void
    {
        $pdo = parent::connectDb();

        $sql = "UPDATE `location` SET `location_start`=:location_start ,`location_periode`=:location_periode ,`location_departure`=:location_departure,`location_arrival`=:location_arrival  WHERE `location_id` =:location_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':location_start', $locationStart, PDO::PARAM_STR);
        $query->bindValue(':location_periode', $locationPeriode, PDO::PARAM_STR);
        $query->bindValue(':location_departure', $locationDeparture, PDO::PARAM_STR);
        $query->bindValue(':location_arrival', $locationArrival, PDO::PARAM_STR);
        $query->bindValue(':location_id', $locationId, PDO::PARAM_INT);

        $query->execute();
    }

    /**
     * Permet de changer le statut de la réservation
     * 
     * @param string $locationValidation La valeur à rentrer dans la bdd
     * @param int $locationId L'id de la location
     */
    public function ChangeValidation(string $locationValidation, int $locationId)
    {
        $pdo = parent::connectDb();

        $sql = "UPDATE `location` SET `location_validate` = :location_validate WHERE `location_id` =:location_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':location_validate', $locationValidation, PDO::PARAM_BOOL);
        $query->bindValue(':location_id', $locationId, PDO::PARAM_INT);

        $query->execute();
    }


    /**
     * Permet de supprimer la réservation
     * 
     * @param int $locationId L'id de la location
     */
    public function deleteLocation(string $locationId)
    {
        $pdo = parent::connectDb();

        $sql = "DELETE	FROM `location` WHERE `location_id` =:location_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':location_id', $locationId, PDO::PARAM_STR);

        $query->execute();
    }
}
