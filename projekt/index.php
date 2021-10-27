<?php
require_once("Classes/Zadowolony.php");
require_once("Classes/Srednio.php");
require_once("Classes/Niezadowolony.php");
require_once("Classes/Opinie.php");

$opinie= new Opinie();
$opinie->run();
