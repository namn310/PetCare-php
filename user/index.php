<?php

session_start();

//load file Connection.php
include "../connection/Connection.php";
//load file controller
include "../connection/Controller.php";
?>
<?php
$controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
// //viet hoa chu dau tien
// $controller = uncfirst($controller);
$action = isset($_GET["action"]) ? $_GET["action"] : "index";
//noi chuoi de thanh file controller vat ly
$fileController = "Controllers/$controller" . "Controller.php";

$classController = "$controller" . "Controller";
//kiem tra xem file vat ly co ton tai khong, neu co thi load no
if (file_exists($fileController)) {
    include $fileController;
    //khoi tao object
    $obj = new $classController();
    //goi den ham trong object
    $obj->$action();
}

?>
