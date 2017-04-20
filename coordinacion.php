<?php
include "tplClass.php";
$tpl = new tplClass();

//$data["TEXTO"] = "un texto";
$data["CONTENIDO"] = $tpl->printTemplate("coordinacion", NULL);
$data["TITULO"] = "Coordinacion";
echo $tpl->printTemplate("Master", $data);

?>