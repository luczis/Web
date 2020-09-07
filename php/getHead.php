<?php

switch($lang):
	case "en_us":
		switch($position):
			case "title":
				echo "Personal Website";
				break;
			case "description":
				echo "Lucas Zischler portifolio, Electrical Engineering student at UTFPR";
				break;
			case "keywords":
				echo "Lucas Zischler, Electrical Engineering, UTFPR, Portifolio, Personal website";
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
			case "description":
				echo "Portifólio do Lucas Zischler, estudante de Engenharia Elétrica pela Universidade Tecnológica Federal do Paraná";
				break;
			case "keywords":
				echo "Lucas Zischler, Engenharia Elétrica, UTFPR, Portifólio, Site pessoal";
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
				echo "IDIOMA";
				break;
			default:
				break;
		endswitch;
		break;
endswitch;
?>
