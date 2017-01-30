<?php

class Permission {

    public function getPermissionsIdByName($name) {
        $db = new DatabaseController();
        $query = 'SELECT `id` FROM `permissions` WHERE `name`  =  "' . $name . '" '; 
        $sqlResult = $db->readQuery($query);
        $row = mysql_fetch_assoc($sqlResult);
        return $row['id'];
    }

    public function getPermissionsByIds($array) {
        
        $db = new DatabaseController();
        $query = 'SELECT *  FROM `permissions` WHERE `id` IN  (' . $array . ')  ';
 
        $sqlResult = $db->readQuery($query);

        $result = [];
        
        while ($row = mysql_fetch_array($sqlResult)) {

            array_push($result, $row['name']);
        }
        return $result;
    }
    
    public function getPermissionsByIdsInMenu($array) {
        
        $db = new DatabaseController();
        $query = 'SELECT *  FROM `permissions` WHERE `menu` = "1" AND `id` IN  (' . $array . ')  ';
 
        $sqlResult = $db->readQuery($query);

        $result = [];
        
        while ($row = mysql_fetch_array($sqlResult)) {

            array_push($result, $row['name']);
        }
        return $result;
    }

}
