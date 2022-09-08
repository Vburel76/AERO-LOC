<?php

class PlaneLoc extends Database
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

    public function addLocPlane(string $_plane_name, int $_plane_size, int $_plane_scode, int $_plane_autonomy, int $_plane_altitude,int $_speed,string $_plane_text_card, string $_plane_picture_val): void
    {
        $pdo = parent::connectDb();

        $sql = "INSERT INTO `plane` (`plane_name`,`plane_size`,`plane_scope`, `plane_autonomy`, `plane_altitude`,`plane_speed`,`plane_text_card`,`plane_picture_val`)
        VALUES (:name,:size,:scope,:autonomy,:altitude,:speed,:text_card,:picture)";

        $query = $pdo->prepare($sql);

        $query->bindValue(':name', $_plane_name, PDO::PARAM_STR);
        $query->bindValue(':size', $_plane_size, PDO::PARAM_INT);
        $query->bindValue(':scope', $_plane_scode, PDO::PARAM_INT);
        $query->bindValue(':autonomy', $_plane_autonomy, PDO::PARAM_INT);
        $query->bindValue(':altitude', $_plane_altitude, PDO::PARAM_INT);
        $query->bindValue(':speed', $_speed, PDO::PARAM_INT);
        $query->bindValue(':text_card', $_plane_text_card, PDO::PARAM_STR);
        $query->bindValue(':picture', $_plane_picture_val, PDO::PARAM_STR);
        

        $query->execute();
    }
}



