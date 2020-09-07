<?php

switch($lang):
	case "en_us":
		switch($position):
			case "donate":
				echo "Consider supporting these organizations:";
				break;
			case "posts":
				echo "Posts";
				break;
			case "more":
				echo "...More";
				break;
			case "sidebar":
				echo "Info";
				break;
			case "ongoing_work":
				echo "Works Ongoing";
				break;
			case "done_work":
				echo "Works Concluded";
				break;
			case "availability":
				echo "Availability";
				break;
			case "full":
				echo "Full";
				break;
			case "free":
				echo "Free";
				break;
			case "last_updates":
				echo "Last Updates";
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
			case "number":
				echo "Phone";
				break;
			default:
				break;
		endswitch;
		break;
	default:
		switch($position):
			case "donate":
				echo "Considere apoiar estas organizações:";
				break;
			case "posts":
				echo "Postagens";
				break;
			case "more":
				echo "...Mais";
				break;
			case "sidebar":
				echo "Informações";
				break;	
			case "ongoing_work":
				echo "Trabalhos em Andamento";
				break;
			case "done_work":
				echo "Projetos Concluídos";
				break;
			case "availability":
				echo "Disponibilidade";
				break;
			case "full":
				echo "Cheio";
				break;
			case "free":
				echo "Livre";
				break;
			case "last_updates":
				echo "Últimas Atualizações";
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
			case "number":
				echo "Telefone";
				break;
			default:
				break;
		endswitch;
		break;
endswitch;
?>
