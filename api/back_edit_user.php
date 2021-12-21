<?php
include_once "db.php";
$admin = 0;
$admin = isset($_POST['admin']) ? 1 : 0;

$user = all("users", ["id" => $_GET["id"]]);
foreach ($user as $key => $value) {
  // dd($user);
}


update("users", ["email" => $_POST["email"]], ["id" => $value["id"]]);
update("users", ["name" => $_POST["name"]], ["id" => $value["id"]]);
update("users", ["gender" => $_POST["gender"]], ["id" => $value["id"]]);
update("users", ["birthday" => $_POST["birthday"]], ["id" => $value["id"]]);
update("users", ["admin" => $admin], ["id" => $value["id"]]);

to("../backend/index.php?do=manage_user.php");
