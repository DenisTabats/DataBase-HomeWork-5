<?php
include "functions.php";
addInfo($_POST['IDtour'], $_POST['dateDeparture'], $_POST['routeDeparture']);
header("Location:index.php");
?>



