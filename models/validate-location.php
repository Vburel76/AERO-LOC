<?php


class Validates extends DataBase
{
    private int $_location_id;
    private string $_location_start;
    private string $_location_end;
    private string $_location_departure;
    private string $_location_arrival;
    private string $_location_validate;
    private string $_user_id;
    private string $_plane_id;

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

//  methode pour ajouter un rendez vous (en cours de création)
    public function addvalidate(string $_location_start, string $_location_end, string $_location_departure, string $_location_arrival, string $_user_id,string $_plane_id ): void
    {
        $pdo = parent::connectDb();

        $sql = "INSERT INTO `user` (`user_lastname`,`user_firstname`,`user_mail`, `user_phone`, `user_password`,`user_validate`,`role_id_role`)
        VALUES (:lastname, :firstname,:mail,:phonenumber, :password,0,3)";

        $query = $pdo->prepare($sql);

        $query->bindValue(':lastname', $_user_lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $_user_firstname, PDO::PARAM_STR);
        $query->bindValue(':mail', $_user_mail, PDO::PARAM_STR);
        $query->bindValue(':phonenumber', $_user_phone, PDO::PARAM_STR);
        $query->bindValue(':password', $_user_password, PDO::PARAM_STR);
        

        $query->execute();
    }

}
