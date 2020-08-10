<?php
switch($lang):
	case "en_us":
		switch($org):
			case 1:
				echo "<b>Make Rojava Green Again</b> works to ecologically restructure the kurdish region at northeastern Siria. A place affected by war, it stands out as a beacon for freedom and ecological revolution for the world.";
				break;
			case 2:
				echo "<b>Let's Encrypt</b> aim for a safer internet, supplying free SSL certificates, for end-to-end encryption at the web, protecting data from man in the middle attacks.";
				break;
			default;
				break;
		endswitch;
		break;	
	default:
		switch($org):
			case 1:
				echo "<b>Make Rojava Green Again</b> trabalha para reestruturar ecologicamente a região dos curdos no nordeste da Síria. Uma área afetada pela guerra, se destaca como um faról para liberdade e revolução ecológica para o mundo.";
				break;
			case 2:
				echo "<b>Let's Encrypt</b> visa para uma internet mais segura, fornecendo certificação SSL gratuita, para criptografía de ponta a ponta na internet, protegendo dados de ataques man in the middle.";
				break;
			default;
				break;
		endswitch;
		break;
endswitch;
?>
