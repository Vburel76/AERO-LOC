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


    /**
     * Permet d'ajouter un utilisateur dans la bdd'
     * 
     * 
     */

    public function addUser(string $_user_lastname, string $_user_firstname, string $_user_mail, string $user_picture_profil, string $_user_phone, string $_user_password): void
    {
        $pdo = parent::connectDb();

        $sql = "INSERT INTO `user` (`user_lastname`,`user_firstname`,`user_mail`,`user_picture_profil`, `user_phone`, `user_password`,`user_validate`,`role_id_role`)
        VALUES (:lastname, :firstname,:mail,:picture,:phonenumber, :password,0,3)";

        $query = $pdo->prepare($sql);

        $query->bindValue(':lastname', $_user_lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $_user_firstname, PDO::PARAM_STR);
        $query->bindValue(':mail', $_user_mail, PDO::PARAM_STR);
        $query->bindValue(':picture', $user_picture_profil, PDO::PARAM_STR);
        $query->bindValue(':phonenumber', $_user_phone, PDO::PARAM_STR);
        $query->bindValue(':password', $_user_password, PDO::PARAM_STR);


        $query->execute();
    }



    /**
     * Permet de vérifier si le mail existe dans la BDD 
     * 
     * 
     */
    public function checkIfMailExists(string $mail): bool
    {
        $pdo = parent::connectDb();

        $sql = "SELECT `user_mail` FROM `user` WHERE `user_mail` = :mail";

        $query = $pdo->prepare($sql);

        $query->bindValue(':mail', $mail, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetchAll();

        if (count($result) != 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Permet de vérifier si le mot de passe correspond au mail de l'utilisateur dans la BDD 
     * 
     * 
     */
    public function checkPassword(string $mail): array
    {

        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `user` WHERE `user_mail` = :mail";

        $query = $pdo->prepare($sql);

        $query->bindValue(':mail', $mail, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * Permet de d'afficher la liste des utilisateurs
     * 
     * 
     */
    public function returnUsers()
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `user`";

        $query = $pdo->query($sql);

        $query->execute();

        $result = $query->fetchAll();

        return $result;
    }

    /**
     * Permet de supprimer un utilisateur grace à son ID 
     * 
     * 
     */
    public function deleteUser(string $userid): void
    {
        $pdo = parent::connectDb();

        $sql = "DELETE	FROM `user` WHERE `user_id` =:user_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':user_id', $userid, PDO::PARAM_STR);

        $query->execute();
    }

    /**
     * Permet d'afficher un utilisateur grace à son ID  
     * 
     * 
     */
    public function returnOneUser($user_id)
    {
        $pdo = parent::connectDb();

        $sql = "SELECT `user_id`,`user_lastname`,`user_firstname`,`user_mail`,`user_picture_profil`,`user_password`,`user_phone`,`role_name`,`role_id` FROM `user`INNER JOIN `role` ON `role_id_role` = `role_id` WHERE `user_id` =:user_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':user_id', $user_id, PDO::PARAM_STR);

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
     * Permet de modifier un utilisateur en fonction de son ID  
     * 
     * 
     */
    public function modifUser(string $lasnameUser, string $firstnameUser, string $userPictureProfil, string $phoneNumberUser, string $passwordUser, string $roleUser, string $usersId): void
    {
        $pdo = parent::connectDb();

        $sql = "UPDATE `user` SET `user_lastname`=:user_lastname ,`user_firstname`=:user_firstname ,`user_picture_profil`=:user_picture_profil,`user_phone`=:user_phone,`user_password`=:user_password,`role_id_role` =:role_id_role  WHERE `user_id` =:user_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':user_lastname', $lasnameUser, PDO::PARAM_STR);
        $query->bindValue(':user_firstname', $firstnameUser, PDO::PARAM_STR);
        $query->bindValue(':user_picture_profil', $userPictureProfil, PDO::PARAM_STR);
        $query->bindValue(':user_phone', $phoneNumberUser, PDO::PARAM_STR);
        $query->bindValue(':user_password', $passwordUser, PDO::PARAM_STR);
        $query->bindValue(':role_id_role', $roleUser, PDO::PARAM_STR);
        $query->bindValue(':user_id', $usersId, PDO::PARAM_STR);

        $query->execute();
    }

    public function modifRoleUser(string $roleUser, string $usersId): void
    {
        $pdo = parent::connectDb();

        $sql = "UPDATE `user` SET`role_id_role` =:role_id_role  WHERE `user_id` =:user_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':role_id_role', $roleUser, PDO::PARAM_STR);
        $query->bindValue(':user_id', $usersId, PDO::PARAM_STR);

        $query->execute();
    }
}
