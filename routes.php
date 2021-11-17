<?php

//$router->register(
//    [
//        ""=>"Controllers/IndexController.php",
//        "about"=>"Controllers/AboutController.php",
//        "contact"=>"Controllers/ContactController.php",
//        "names"=>"Controllers/add-name.php"
//    ]
//);

//$router->get("","Controllers/IndexController.php");
//$router->get("about","Controllers/AboutController.php");
//$router->get("contact","Controllers/ContactController.php");
//$router->post("names","Controllers/add-name.php");
//$router->get("edit","Controllers/EditController.php");
//$router->post("edit","Controllers/edit-name.php");
//$router->get("delete","Controllers/delete-name.php");

//$router->get("","PageController@index");
//$router->get("about","PageController@about");
//$router->get("contact","PageController@contact");
//$router->post("names","PageController@createUser");
//$router->get("edit","PageController@edit");
//$router->post("edit","PageController@editUser");
//$router->get("delete","PageController@deleteUser");

use controllers\PageController;

$router->get("", [PageController::class, "index"]);
$router->get("about", [PageController::class, "about"]);
$router->get("contact", [PageController::class, "contact"]);
$router->post("names", [PageController::class, "createUser"]);
$router->get("edit", [PageController::class, "edit"]);
$router->post("edit", [PageController::class, "editUser"]);
$router->get("delete", [PageController::class, "deleteUser"]);
