<?php

class User {

    public function getUserByUserNameAndPassword($userName, $password) {

        $db = new DatabaseController();

        $query = "SELECT * FROM users WHERE userName = '$userName' AND passwod='$password'";

        $result = $db->readQuery($query);

        return mysql_fetch_assoc($result);
    }

    public function save($data) {

        $db = new DatabaseController();

        $createdAt = date('Y-m-d H:i:s');
        $lastLogin = date('Y-m-d H:i:s');

        $query = 'INSERT INTO users '
                . '(name,email,birthday,nic,userName,passwod,createdAt,isActive,permissions,lastLogin)'
                . 'VALUES '
                . '( '
                . '"' . $data['txtName'] . '",'
                . '"' . $data['txtEmail'] . '",'
                . '"' . $data['txtBirthDay'] . '",'
                . '"' . $data['txtNic'] . '",'
                . '"' . $data['txtUseName'] . '",'
                . '"' . $data['txtPassword'] . '",'
                . '"' . $createdAt . '",'
                . '"' . $data['isActive'] . '",'
                . '"' . $data['permissions'] . '",'
                . '"' . $lastLogin . '"'
                . ') ';

        return $result = $db->readQuery($query);
    }

    public function update($data) {

        $db = new DatabaseController();

        $txtid = $data['txtId'];
        $txtName = $data['txtName'];
        $txtEmail = $data['txtEmail'];
        $txtBirthDay = $data['txtBirthDay'];
        $txtNic = $data['txtNic'];
        $txtUseName = $data['txtUseName'];
        $txtPassword = $data['txtPassword'];
        $isActive = $data['isActive'];
        $permissions = $data['permissions'];


        $query = "UPDATE users SET "
                . "name = '$txtName',"
                . "email = '$txtEmail',"
                . "birthday = '$txtBirthDay',"
                . "nic = '$txtNic',"
                . "userName = '$txtUseName',"
                . "passwod = '$txtPassword',"
                . " isActive = '$isActive',"
                . " permissions = '$permissions' "
                . "WHERE id = $txtid";

        return $result = $db->readQuery($query);
    }

    public function getNameByName($userName, $id = NULL) {

        $db = new DatabaseController();
        if ($id) {
            $query = "SELECT * FROM users WHERE userName = '$userName' AND id != '$id'";
        } else {
            $query = "SELECT * FROM users WHERE userName = '$userName'";
        }

        $result = $db->readQuery($query);

        return mysql_fetch_assoc($result);
    }

    public function getAll() {

        $db = new DatabaseController();
        $users = [];

        $query = "SELECT * FROM users";

        $result = $db->readQuery($query);

        while ($row = mysql_fetch_object($result)) {
            array_push($users, $row);
        }

        return $users;
    }

    public function getUseById($id) {

        $db = new DatabaseController();

        $query = "SELECT * FROM users WHERE id = '$id'";

        $result = $db->readQuery($query);

        return mysql_fetch_assoc($result);
    }

    public function deactivateUserById($id) {

        $db = new DatabaseController();

        $isActive = 0;

        $query = "UPDATE users SET "
                . " isActive = '$isActive'"
                . "WHERE id = $id";

        return $result = $db->readQuery($query);
    }

    public function activateUserById($id) {

        $db = new DatabaseController();

        $isActive = 1;

        $query = "UPDATE users SET "
                . " isActive = '$isActive'"
                . "WHERE id = $id";

        return $result = $db->readQuery($query);
    }

}
