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


    // Methode pour ajouter un utilisateur a l'aide d'un formulaire 

    public function addUser(string $_user_lastname, string $_user_firstname, string $_user_mail, string $_user_phone, string $_user_password): void
    {
        $pdo = parent::connectDb();

        $sql = "INSERT INTO `user` (`user_lastname`,`user_firstname`,`user_mail`, `user_phone`, `user_password`,`user_validate`,`role_id`)
        VALUES (:lastname, :firstname,:mail,:phonenumber, :password,0,3)";

        $query = $pdo->prepare($sql);

        $query->bindValue(':lastname', $_user_lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $_user_firstname, PDO::PARAM_STR);
        $query->bindValue(':mail', $_user_mail, PDO::PARAM_STR);
        $query->bindValue(':phonenumber', $_user_phone, PDO::PARAM_STR);
        $query->bindValue(':password', $_user_password, PDO::PARAM_STR);

        $query->execute();
    }


    public function checkIfMailExists(string $mail): bool
    {
        // création d'une instance pdo via la fonction du parent
        $pdo = parent::connectDb();

        // j'écris la requête me permettant d'aller chercher le mail dans la table users
        // je mets en place un marqueur nominatif :mail
        $sql = "SELECT `user_mail` FROM `user` WHERE `user_mail` = :mail";

        $query = $pdo->prepare($sql);

        $query->bindValue(':mail', $mail, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetchAll();

        // je fais un test pour savoir si $result est vide
        if (count($result) != 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkPassword(string $mail): array
    {

        // 1) connection a la base de donnée
        $pdo = parent::connectDb();

        // 2) j'ecris la requete pour aller chercher le password
        $sql = "SELECT * FROM `user` WHERE `user_mail` = :mail";

        // 3) je prepare la requete 
        $query = $pdo->prepare($sql);

        // 4) je lie ':password' à $password
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);

        // 5) j'execute la requete 
        $query->execute();

        // 6) je stock le resultat dans une variable
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // 7) j'effectue les vérifications 
        return $result;
    }

    // methode pour retourner les informations de tous les users

    public function returnUsers()
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `user`";

        $query = $pdo->query($sql);

        $query->execute();

        $result = $query->fetchAll();

        return $result;
    }

    public function deleteUser(string $userid): void
    {
        $pdo = parent::connectDb();

        $sql = "DELETE	FROM `user` WHERE `user_id` =:user_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':user_id', $userid, PDO::PARAM_STR);

        $query->execute();
    }
}
