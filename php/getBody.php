<?php

switch($lang):
	case "en_us":
		switch($position):
			case "donate":
				echo "Consider donating to these organizations:";
				break;
			case "posts":
				echo "Posts";
				break;
			case "sidebar":
				echo "Info";
				break;
			case "port":
				echo "Portifolio";
				break;
			case "about":
				echo "About";
				break;
			case "cont":
				echo "Contact";
				break;
			default:
				break;
		endswitch;
		break;
	default:
		switch($position):
			case "donate":
				echo "Considere fazer uma doação para estas organizações:";
				break;
			case "posts":
				echo "Postagens";
				break;
			case "sidebar":
				echo "Informações";
				break;
			case "port":
				echo "Portifólio";
				break;
			case "about":
				echo "Sobre";
				break;
			case "cont":
				echo "Contato";
				break;
			default:
				break;
		endswitch;
		break;
endswitch;
?>
