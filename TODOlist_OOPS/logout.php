<?php

require_once "config/db.php";

session_start();
session_unset();
session_destroy();

header("Location: index.php");
exit;
