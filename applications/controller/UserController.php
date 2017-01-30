<?php

class UserController {

    public function addNewUser($data) {

        $this->validateForSave($data);

        $user = new User;
        $result = $user->save($data);

        if ($result) {

            $result = [
                "status" => "add"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        }
    }

    public function updateUser($data) {

        $this->validateForUpdate($data);

        $user = new User;
        $result = $user->update($data);

        if ($result) {

            $result = [
                "status" => "add"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        }
    }

    public function deactivateUser($data) {

        $user = new User;
        $result = $user->deactivateUserById($data);

        if ($result) {

            $result = [
                "status" => "deactivate"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        }
    }

    public function activateUser($data) {

        $user = new User;
        $result = $user->activateUserById($data);

        if ($result) {

            $result = [
                "status" => "activate"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        }
    }

    public function validateForSave($data) {
        if (empty($data['txtName']) ||
                empty($data['txtEmail']) ||
                empty($data['txtBirthDay']) ||
                empty($data['txtNic']) ||
                empty($data['txtUseName']) ||
                empty($data['txtPassword']) ||
                empty($data['txtConfirmPassword'])) {
            $result = [
                "status" => "empty"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        } elseif ($data['txtPassword'] !== $data['txtConfirmPassword']) {
            $result = [
                "status" => "notmatch"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        } else {

            if ($this->checkUserNameIsduplicate($data['txtUseName'])) {
                $result = [
                    "status" => "duplicate"
                ];
                header('Content-Type: application/json');
                echo json_encode($result);
                exit();
            }
        }
    }

    public function validateForUpdate($data) {
        if (empty($data['txtName']) ||
                empty($data['txtEmail']) ||
                empty($data['txtBirthDay']) ||
                empty($data['txtNic']) ||
                empty($data['txtUseName']) ||
                empty($data['txtPassword']) ||
                empty($data['txtConfirmPassword'])) {
            $result = [
                "status" => "empty"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        } elseif ($data['txtPassword'] !== $data['txtConfirmPassword']) {
            $result = [
                "status" => "notmatch"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        }
        if ($this->checkUserNameIsduplicate($data['txtUseName'], $data['txtId'])) {
            $result = [
                "status" => "duplicate"
            ];
            header('Content-Type: application/json');
            echo json_encode($result);
            exit();
        }
    }

    public function checkUserNameIsduplicate($userName, $id = NULL) {

        $user = new User;
        $result = $user->getNameByName($userName, $id);

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function createUserPermissionList($permissionsArry, $items, $level = 0) {

        $permissions = new Permission();
        $ret = "";
        $indent = str_repeat(" ", $level * 2);
        $ret .= sprintf("%s<ul class='list-group'>\n", $indent);
        $indent = str_repeat(" ", ++$level * 2);

        foreach ($items as $item => $subitems) {

            if (!is_numeric($item)) {
                $name = ucfirst(str_replace("_", " ", $item));
                $CheckBoxValue = $permissions->getPermissionsIdByName($item);

                $checked = "";
                if (in_array($CheckBoxValue, $permissionsArry)) {
                    $checked = "checked";
                }


                $ret .= $indent . "<li class='list-group-item main-header-permissions'> "
                        . "<a ><label> "
                        . "<input type='checkbox' class='check-box' "
                        . $checked
                        . " name='permissions[]' value='$CheckBoxValue'>&nbsp;&nbsp;"
                        . $name
                        . "</a ></label>"
                        . "";
            }
            if (is_array($subitems)) {

                $ret .= "\n";
                $ret .= $this->createUserPermissionList($permissionsArry, $subitems, $level + 1);
                $ret .= $indent;
            } else if (strcmp($item, $subitems)) {

                $nameSub = ucfirst(str_replace("_", " ", $subitems));

                $CheckBoxSubValue = $permissions->getPermissionsIdByName($subitems);

                $checked = "";
                if (in_array($CheckBoxSubValue, $permissionsArry)) {
                    $checked = "checked";
                }
                $ret .= $indent . "<li class='list-group-item'> "
                        . "<a ><label> "
                        . "<input type='checkbox' class='check-box'  "
                        . $checked
                        . " name='permissions[]' value='$CheckBoxSubValue'>&nbsp;&nbsp;"
                        . $nameSub
                        . "</a ></label>"
                        . "";
            }
            $ret .= sprintf("</li>\n", $indent);
        }
        $indent = str_repeat(" ", --$level * 2);
        $ret .= sprintf("%s</ul>\n", $indent);

        return ($ret);
    }

    public function showPermissionList($permissions) {
        $menu = new Menu();
        $items = $menu->getDataList();
        $permissionsArray = explode(",", $permissions);
        echo $this->createUserPermissionList($permissionsArray, $items);
    }

    public function ShowAll() {

        $user = new User;
        $result = $user->getAll();

        return $result;
    }

    public function showUserById($id) {

        $user = new User;
        $result = $user->getUseById($id);

        return $result;
    }

}
