<?php

switch($lang):
	case "en_us":
		switch($position):
			case "title":
				echo "Personal Website";
				break;
			case "home":
				echo "HOME";
				break;
			case "post":
				echo "POSTS";
				break;
			case "port":
				echo "PORTIFOLIO";
				break;
			case "about":
				echo "ABOUT";
				break;
			case "cont":
				echo "CONTACT";
				break;
			case "lang":
				echo "LANGUAGE";
				break;
			default:
				break;
		endswitch;
		break;
	default:
		switch($position):
			case "title":
				echo "Site Pessoal";
				break;
			case "home":
				echo "INÍCIO";
				break;
			case "post":
				echo "POSTAGENS";
				break;
			case "port":
				echo "PORTIFÓLIO";
				break;
			case "about":
				echo "SOBRE";
				break;
			case "cont":
				echo "CONTATO";
				break;
			case "lang":
				echo "IDIOMAS";
				break;
			default:
				break;
		endswitch;
		break;
endswitch;
?>
