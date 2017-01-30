<?php

class Message {

    public function getErrorMessageById($id) {

        $db = new DatabaseController();

        $query = "SELECT * FROM massages WHERE id = '" . $id . "'";

        $result = $db->readQuery($query);
        $row = mysql_fetch_assoc($result);

        return $row;
    }

}
