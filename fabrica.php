<?php
include "tplClass.php";
$tpl = new tplClass();

//$data["TEXTO"] = "un texto";
$data["CONTENIDO"] = $tpl->printTemplate("fabrica", NULL);
$data["TITULO"] = "Fabrica";
echo $tpl->printTemplate("Master", $data);

?>