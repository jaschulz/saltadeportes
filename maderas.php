<?php
include "tplClass.php";
$tpl = new tplClass();

//$data["TEXTO"] = "un texto";
$data["CONTENIDO"] = $tpl->printTemplate("maderas", NULL);
$data["TITULO"] = "Maderas";
echo $tpl->printTemplate("Master", $data);

?>