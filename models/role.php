<?php 

class Role extends DataBase{
    private int $_role_id;
    private int $_role_name;




    public function get_role_id()
    {
        return $this->_role_id;
    }

    public function set_role_id($_role_id)
    {
        $this->_role_id = $_role_id;
    }


    public function get_role_name()
    {
        return $this->_role_name;
    }

    public function set_role_name($_role_name)
    {
        $this->_role_name = $_role_name;
    }


    public function getAllRole(){

        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `role`";
    
        $query = $pdo->query($sql);

        $query->execute();

        $result = $query->fetchAll();

        return $result;
    }
}