<?php
include "tplClass.php";
$tpl = new tplClass();

//$data["TEXTO"] = "un texto";
$data["CONTENIDO"] = $tpl->printTemplate("chapas", NULL);
$data["TITULO"] = "Chapas";
echo $tpl->printTemplate("Master", $data);

?>