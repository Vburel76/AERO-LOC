<?php

// la classe Users sera un enfant de Database
class Users extends DataBase
{
    private int $_user_id;
    private string $_user_lastname;
    private string $_user_firstname;
    private string $_user_mail;
    private string $_user_picture_profil;
    private string $_user_phone;
    private string $_user_password;
    private bool $_user_validate;
    private int $_role_id;


    
    public function get_user_id()
    {
        return $this->_user_id;
    } 
    public function set_user_id($_user_id)
    {
        $this->_user_id = $_user_id;
        return $this;
    }

    
    public function get_user_lastname()
    {
        return $this->_user_lastname;
    }
    
    public function set_user_lastname($_user_lastname)
    {
        $this->_user_lastname = $_user_lastname;
        return $this;
    }

    
    public function get_user_firstname()
    {
        return $this->_user_firstname;
    }
    public function set_user_firstname($_user_firstname)
    {
        $this->_user_firstname = $_user_firstname;
        return $this;
    }


    public function get_user_mail()
    {
        return $this->_user_mail;
    }
    public function set_user_mail($_user_mail)
    {
        $this->_user_mail = $_user_mail;
        return $this;
    }
 
    
    public function get_user_phone()
    {
        return $this->_user_phone;
    }
    public function set_user_phone($_user_phone)
    {
        $this->_user_phone = $_user_phone;
        return $this;
    }

 
    public function get_user_password()
    {
        return $this->_user_password;
    }
    public function set_user_password($_user_password)
    {
        $this->_user_password = $_user_password;
        return $this;
    }

    public function get_user_picture_profil()
    {
        return $this->_user_picture_profil;
    }
    public function set_user_picture_profil($_user_picture_profil)
    {
        $this->_user_picture_profil = $_user_picture_profil;
        return $this;
    }

    
    public function get_user_validate()
    {
        return $this->_user_validate;
    } 
    public function set_user_validate($_user_validate)
    {
        $this->_user_validate = $_user_validate;
        return $this;
    }

    
    public function get_role_id()
    {
        return $this->_role_id;
    }
    public function set_role_id($_role_id)
    {
        $this->_role_id = $_role_id;
        return $this;
    }


    public function addUser(string $_user_lastname, string $_user_firstname, string $_user_phone, string $_user_password, string $_user_mail): void
    {
        // création d'une instance pdo via la fonction du parent
        $pdo = parent::connectDb();

        // j'écris la requête me permettant d'insérer un patient dans la table patients
        // je mets en place des marqueurs nominatifs pour faciliter la manipulation des paramètres : :lastname, :firstname, :phonenumber, :address, :mail
        $sql = "INSERT INTO `user` (`user_lastname`,`user_firstname`, `user_phone`, `user_password`, `user_mail`)
        VALUES (:lastname, :firstname, :phonenumber, :password, :mail)";

        // je prépare la requête que je stock dans $query à l'aide de la méthode ->prepare()
        $query = $pdo->prepare($sql);

        // je lie les valeurs des paramètres aux marqueurs nominatifs respectifs à l'aide de la méthode ->bindValue()
        $query->bindValue(':lastname', $_user_lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $_user_firstname, PDO::PARAM_STR);
        $query->bindValue(':phonenumber', $_user_phone, PDO::PARAM_STR);
        $query->bindValue(':password', $_user_password, PDO::PARAM_STR);
        $query->bindValue(':mail', $_user_mail, PDO::PARAM_STR);

        // une fois le mail récupéré, j'execute la requête à l'aide de la méthode ->execute()
        $query->execute();
    }
}