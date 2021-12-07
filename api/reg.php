<?php

include_once "db.php";

ins('users',$_POST);
to("../index.php");

?>