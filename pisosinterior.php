<?php
include "tplClass.php";
$tpl = new tplClass();

//$data["TEXTO"] = "un texto";
$data["CONTENIDO"] = $tpl->printTemplate("pisosinterior", NULL);
$data["TITULO"] = "Pisos de Interior";
echo $tpl->printTemplate("Master", $data);

?>