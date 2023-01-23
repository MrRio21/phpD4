<?php
require_once("vendor/autoload.php");
$pages = ["details","home"];
$page = (isset($_GET["view"])&&in_array($_GET["view"],$pages))?$_GET["view"]:"home";

require_once("./views/$page.php");
