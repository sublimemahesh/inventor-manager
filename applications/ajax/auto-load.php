<?php

header('Content-Type: application/json; charset=utf-8');
include '../controller/DatabaseController.php';

if (isset($_POST['getList'])) {

    $field = $_POST['field'];
    $tableName = $_POST['tableName'];
    $columnName = $_POST['columnName'];

    $db = new DatabaseController();
    $query = "SELECT `id`,`" . $columnName . "` FROM " . $tableName . " WHERE `" . $columnName . "` LIKE CONCAT('%', '" . $field . "', '%')";

    $dataArray = array();

    $result = $db->readQuery($query);

    while ($name = mysql_fetch_assoc($result)) {
        $dataArray[] = array_map('utf8_encode', $name);
    }

    echo json_encode($dataArray);
}

if (isset($_POST['getObject'])) {

    $id = $_POST['id'];
    $tableName = $_POST['tableName'];
    $columnName = $_POST['columnName'];

    $db = new DatabaseController();

    $query = "SELECT * FROM " . $tableName . " WHERE `" . $columnName . "` = " . $id . " ";

    $result = $db->readQuery($query);

    $itemObj = mysql_fetch_assoc($result);

    if (isset($_POST['stock'])) {
        $stock = $_POST['stock'];
        $queryStock = "SELECT * FROM `stock_details` WHERE `stock` = " . $stock . " AND `item` = " . $id . "";

        $quantity = mysql_fetch_assoc($db->readQuery($queryStock))["quantity"];

        if (!$quantity) {
            $quantity = 0;
        }

        $itemObj['quantity'] = $quantity;
    }


    echo json_encode($itemObj);
}

if (isset($_POST['getObjectByCode'])) {

    $code = $_POST['textCode'];

    $db = new DatabaseController();
    $query = "SELECT * FROM `items` WHERE `code` = '" . $code . "'";

    $result = $db->readQuery($query);

    $itemObj = mysql_fetch_assoc($result);

    if (isset($_POST['stock']) && $itemObj['id']) {
        $stock = $_POST['stock'];
        $queryStock = "SELECT * FROM `stock_details` WHERE `stock` = " . $stock . " AND `item` = " . $itemObj['id'] . "";

        $quantity = mysql_fetch_assoc($db->readQuery($queryStock))["quantity"];

        if (!$quantity) {
            $quantity = 0;
        }

        $itemObj['quantity'] = $quantity;
    }


    echo json_encode($itemObj);
}