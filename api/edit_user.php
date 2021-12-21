<?php
include_once "db.php";

$user = all("users", ["account" => $_SESSION["user"]]);
foreach ($user as $key => $value) {
  // dd($user);
}

update("users", ["email" => $_POST["email"]], ["id" => $value["id"]]);
update("users", ["name" => $_POST["name"]], ["id" => $value["id"]]);
update("users", ["gender" => $_POST["gender"]], ["id" => $value["id"]]);
update("users", ["birthday" => $_POST["birthday"]], ["id" => $value["id"]]);

// to("../backend/index.php?do=member");