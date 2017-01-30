<?php



class MenuController {

    public function createMenu($items, $permisi, $level = 0) {

        $ret = "";
        $indent = str_repeat(" ", $level * 2);
        if ($level == 0) {
            $ret .= sprintf("%s<ul class='nav navbar-nav'>\n", $indent);
        } else {
            $ret .= sprintf("%s<ul  class='dropdown-menu' role='menu'>\n", $indent);
        }
        $indent = str_repeat(" ", ++$level * 2);

        foreach ($items as $item => $subitems) {

            if (!is_numeric($item)) {

                if (in_array($item, $permisi)) {
                    
                    $name = ucfirst(str_replace("_", " ", $item));
                    
                    if ($level == 1) {
                        $ret .= sprintf("%s<li  class='dropdown'><a tabindex='0' data-toggle='dropdown' >%s <span class='caret'></span></a>", $indent, $name);
                    } else {
                        $ret .= sprintf("%s<li  class='dropdown-submenu'><a tabindex='0' data-toggle='dropdown' >%s</a>", $indent, $name);
                    }
                }
            }
            if (is_array($subitems)) {

                $ret .= "\n";
                $ret .= $this->createMenu($subitems, $permisi, $level + 1);
                $ret .= $indent;
            } else if (strcmp($item, $subitems)) {
                if (in_array($subitems, $permisi)) {
                    $nameSub = ucfirst(str_replace("_", " ", $subitems));
                    $urlSub = str_replace("_", "-", $subitems);
                    $ret .= sprintf("%s<li><a href='?view=%s'>%s</a>", $indent, $urlSub, $nameSub);
                }
            }

            $ret .= sprintf("</li>\n", $indent);
        }

        $indent = str_repeat(" ", --$level * 2);
        $ret .= sprintf("%s</ul>\n", $indent);

        return($ret);
    }

    public function showMenu() {

        $menuModel = new Menu();

        $items = $menuModel->getDataList();
 
        $permission = new Permission();
        $userPermissions = $permission->getPermissionsByIdsInMenu($_SESSION['PERMISSIONS']);
 
        $result = $this->createMenu($items, $userPermissions);

        return $result;
    }
     
    

}
