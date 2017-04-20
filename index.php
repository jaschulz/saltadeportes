<?php
include "tplClass.php";
$tpl = new tplClass();

//$data["TEXTO"] = "un texto";
$data["CONTENIDO"] = $tpl->printTemplate("index", NULL);
$data["TITULO"] = "Salta Deportes";
echo $tpl->printTemplate("Master", $data);

?>