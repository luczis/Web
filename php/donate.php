<?php
switch($lang):
	case "en_us":
		switch($org):
			case 1:
				echo "<b>Make Rojava Green Again</b> works to ecologically restructure the kurdish region at northeastern Siria. A place affected by war, it stands out as a beacon for freedom and ecological revolution for the world.";
				break;
			case 2:
				echo "<b>The Ocean Cleanup</b> aims to clean the ocean from plastic, developing new technologies for that. Trash in the ocean can be ingested by the marine life, affecting the behavior of fishes and even humans.";
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
				echo "<b>The Ocean Cleanup</b> trabalha para limpeza de plásticos de oceano, desenvolvendo novas tecnologias para isto. Lixo no oceano pode ser ingerido pela vida marinha, afetando o comportamento de peixes e até mesmo de humanos.";
				break;
			default;
				break;
		endswitch;
		break;
endswitch;
?>
