<?php
include "tplClass.php";
$tpl = new tplClass();
		$username = "root";
		$password = "";
		$hostname = "localhost"; 

		$dbhandle = mysql_connect($hostname, $username, $password)
		or die("Unable to connect to MySQL");
		
		
		$selected = mysql_select_db("saltadeportes",$dbhandle);
		

		$data["TITULO"] = "Ruedas Abdominales";
		$sql = "SELECT * FROM `productos` where TIPO = 'Ruedas Abdominales'";
		$result = mysql_query($sql);
		$half   = floor(mysql_num_rows($result)/2);
		$data["CONTENIDO"] = "
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-md-12\">
						<div class=\"panel panel-default\">
							<div class=\"panel-heading\">
								<b>Tipos de maderas y sus caracter&iacute;sticas</b>
							</br>
								Para pisos de interior, pisos de exterior, techos y p&eacute;rgolas de corte constante con stock
							</div>
						</div>
					</div>
				</div>
				<div class=\"row\" style=\"margin-bottom: 80px;\">
					<div class=\"col-md-6\">
						<div id=\"accordion\" class=\"panel-group\">";
						$i = 1;
		while ($i <= $half && $row = mysql_fetch_array($result)) {
		
		$data["CONTENIDO"] .=  
								"<div class=\"panel panel-default\">
									<div class=\"panel-heading\">
										<h4 class=\"panel-title\">
											<a href=\"#collapse".$i."\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"collapsed\">
												".$row{'DESCRIPCION'}."<br />
											</a>
										</h4>
									</div>
									<div class=\"panel-collapse collapse\" id=\"collapse".$i."\" aria-expanded=\"false\">
										<div class=\"panel-body\">
											<img src=".$row{'IMAGEN'}." class=\"img-responsive img-thumbnail center-block\" />
										</div>
										<div><strong>Precio:</strong> $".$row{'PRECIO'}."</div>
									</div>
								</div>";
								++$i;
		
		}
		$data["CONTENIDO"] .=  "
						</div>
					</div>
					<div class=\"col-md-6\">
						<div id=\"accordion2\" class=\"panel-group\">";
		while ($row = mysql_fetch_array($result)) {
		
		$data["CONTENIDO"] .=  
								"<div class=\"panel panel-default\">
									<div class=\"panel-heading\">
										<h4 class=\"panel-title\">
											<a href=\"#collapse".$i."\" data-parent=\"#accordion2\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"collapsed\">
												".$row{'DESCRIPCION'}."<br />
											</a>
										</h4>
									</div>
									<div class=\"panel-collapse collapse\" id=\"collapse".$i."\" aria-expanded=\"false\">
										<div class=\"panel-body\">
											<img src=".$row{'IMAGEN'}." class=\"img-responsive img-thumbnail center-block\" />
										</div>
										<div>
											<strong>Precio:</strong> $".$row{'PRECIO'}."
										</div>
									</div>
								</div>";
								++$i;
		
		}
		$data["CONTENIDO"] .=  "
						</div>
					</div>
				</div>
			</div>";
	echo $tpl->printTemplate("Master", $data);
?>
