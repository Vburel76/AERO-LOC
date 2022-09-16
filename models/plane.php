<?php

class Plane extends Database
{
    private int $_plane_id;
    private string $_plane_name;
    private int $_plane_size;
    private int $_plane_scode;
    private int $_plane_autonomy;
    private int $_plane_altitude;
    private int $_speed;
    private string $_plane_text_card;
    private string $_plane_picture_val;


    public function get_plane_id()
    {
        return $this->_plane_id;
    }

    public function set_plane_id($_plane_id)
    {
        $this->_plane_id = $_plane_id;
    }

    public function get_plane_name()
    {
        return $this->_plane_name;
    }

    public function set_plane_name($_plane_name)
    {
        $this->_plane_name = $_plane_name;
    }

    public function get_plane_size()
    {
        return $this->_plane_size;
    }

    public function set_plane_size($_plane_size)
    {
        $this->_plane_size = $_plane_size;
    }

    public function get_plane_scode()
    {
        return $this->_plane_scode;
    }

    public function set_plane_scode($_plane_scode)
    {
        $this->_plane_scode = $_plane_scode;
    }

    public function get_plane_autonomy()
    {
        return $this->_plane_autonomy;
    }

    public function set_plane_autonomy($_plane_autonomy)
    {
        $this->_plane_autonomy = $_plane_autonomy;
    }

    public function get_plane_altitude()
    {
        return $this->_plane_altitude;
    }

    public function set_plane_altitude($_plane_altitude)
    {
        $this->_plane_altitude = $_plane_altitude;
    }

    public function get_speed()
    {
        return $this->_speed;
    }

    public function set_speed($_speed)
    {
        $this->_speed = $_speed;
    }

    public function get_plane_text_card()
    {
        return $this->_plane_text_card;
    }

    public function set_plane_text_card($_plane_text_card)
    {
        $this->_plane_text_card = $_plane_text_card;
    }

    public function get_plane_picture_val()
    {
        return $this->_plane_picture_val;
    }

    public function set_plane_picture_val($_plane_picture_val)
    {
        $this->_plane_picture_val = $_plane_picture_val;
    }

    public function addPlane(string $_plane_name, int $_plane_size, int $_plane_scode, int $_plane_autonomy, int $_plane_altitude,int $_speed,string $_plane_picture,string $_plane_description, string $_plane_loc_description): void
    {
        $pdo = parent::connectDb();

        $sql = "INSERT INTO `plane` (`plane_name`,`plane_size`,`plane_scope`, `plane_autonomy`, `plane_altitude`,`plane_speed`,`plane_picture`,`plane_description`,`plane_loc_description`)
        VALUES (:name,:size,:scope,:autonomy,:altitude,:speed,:picture,:text_description,:text_description_loc)";

        $query = $pdo->prepare($sql);

        $query->bindValue(':name', $_plane_name, PDO::PARAM_STR);
        $query->bindValue(':size', $_plane_size, PDO::PARAM_INT);
        $query->bindValue(':scope', $_plane_scode, PDO::PARAM_INT);
        $query->bindValue(':autonomy', $_plane_autonomy, PDO::PARAM_INT);
        $query->bindValue(':altitude', $_plane_altitude, PDO::PARAM_INT);
        $query->bindValue(':speed', $_speed, PDO::PARAM_INT);
        $query->bindValue(':picture', $_plane_picture, PDO::PARAM_STR);
        $query->bindValue(':text_description',$_plane_description, PDO::PARAM_STR);
        $query->bindValue(':text_description_loc',$_plane_loc_description, PDO::PARAM_STR);
        

        $query->execute();
    }

    public function returnPlane()
    {
        // création d'une instance pdo via la fonction du parent
        $pdo = parent::connectDb();

        // j'écris la requête me permettant d'insérer un patient dans la table patients
        // je mets en place des marqueurs nominatifs pour faciliter la manipulation des paramètres : :lastname, :firstname, :phonenumber, :address, :mail
        $sql = "SELECT * FROM `plane`";

        // je prépare la requête que je stock dans $query à l'aide de la méthode ->prepare()
        $query = $pdo->query($sql);

        // une fois le mail récupéré, j'execute la requête à l'aide de la méthode ->execute()
        $query->execute();

        $result = $query->fetchAll();

        return $result;
    }

    public function modifPlane(string $_plane_name, int $_plane_size, int $_plane_scode, int $_plane_autonomy, int $_plane_altitude,int $_speed,string $_plane_picture,string $_plane_description, string $_plane_loc_description, string $_planeId): void
    {
        $pdo = parent::connectDb();

        $sql = "UPDATE `plane` SET `plane_name`=:plane_name ,`plane_size`=:plane_size ,`plane_scope`=:plane_scope,`plane_autonomy`=:plane_autonomy,`plane_altitude` =:plane_altitude,`plane_speed` =:plane_speed,`plane_picture` =:plane_picture,`plane_description` =:plane_description,`plane_loc_description` =:plane_loc_description  WHERE `plane_id` =:plane_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':plane_name', $_plane_name, PDO::PARAM_STR);
        $query->bindValue(':plane_size', $_plane_size, PDO::PARAM_INT);
        $query->bindValue(':plane_scope', $_plane_scode, PDO::PARAM_INT);
        $query->bindValue(':plane_autonomy', $_plane_autonomy, PDO::PARAM_INT);
        $query->bindValue(':plane_altitude', $_plane_altitude, PDO::PARAM_INT);
        $query->bindValue(':plane_speed', $_speed, PDO::PARAM_INT);
        $query->bindValue(':plane_picture', $_plane_picture, PDO::PARAM_STR);
        $query->bindValue(':plane_description', $_plane_description, PDO::PARAM_STR);
        $query->bindValue(':plane_loc_description', $_plane_loc_description, PDO::PARAM_STR);
        $query->bindValue(':plane_id', $_planeId, PDO::PARAM_STR);

        $query->execute();
    }

    // retourne les informations d'un seul patient par rapport a l'ID renseigné
    public function returnOnePlane($plane_id)
    {
        // crée une instance PDO
        $pdo = parent::connectDb();

        // je crée une requete pour afficher les informations d'un avion
        $sql = "SELECT * FROM `plane` WHERE `plane_id` =:plane_id";

        // Je prépare la requete a l'aide de la methode prepare
        $query = $pdo->prepare($sql);

        // je lie les valeurs des parametres aux marqueurs nominatifs
        $query->bindValue(':plane_id', $plane_id, PDO::PARAM_STR);

        // une j'execute la requete a l'aide de la methode execute
        $query->execute();

        $result = $query->fetchAll();

        // je return le resultat
        return $result[0];
    }

    public function deletePlane(string $planeid): void
    {
        $pdo = parent::connectDb();

        $sql = "DELETE	FROM `plane` WHERE `plane_id` =:plane_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':plane_id', $planeid, PDO::PARAM_STR);

        $query->execute();
    }
}



