<?php

require_once("CarrestKezelo.php");

$view = "";
if(isset($_GET["view"]))
$view = $_GET["view"];

switch($view)
{
    case "all":
        $Oscarrest = new CarrestKezelo();
        $Oscarrest->getAllcars();
        break;

    case "single":
        $Oscarrest = new CarrestKezelo();
        $Oscarrest->getcarById($_GET["c_id"]);
        break;

    case "tipus":
        $Oscarrest = new CarrestKezelo();
        $Oscarrest->getcarsByType($_GET["ct_desc"]);
        break;

    default:
    $Oscarrest = new CarrestKezelo();
    $Oscarrest->getFault();    
}

?>