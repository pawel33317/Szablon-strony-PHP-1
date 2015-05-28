<?php
require('libs/Smarty.class.php');
$smarty = new Smarty;
error_reporting(0);
//META
$smarty->assign("tytulStrony","Acyk.pl");
$smarty->assign("favi","img/favi.png");

//LOGO
$logo = array("img/logo.png", "img/logot.png");
$smarty->assign("logo",$logo);

//SHARE
$share = array("img/icons/facebook.png", "img/icons/naszaklasa.png", "img/icons/googleplus.png", "img/icons/rss.png");
$smarty->assign("share",$share);

//MENU
$menu = array(
  array("act"=>true,  "title"=>"Aktualności",	"link"=>"index.php", "sub"=>false),
  array("act"=>false, "title"=>"Programowanie",	"link"=>"#",		 "sub"=>true, "submenu"=>array("HTML5, CSS3", "PHP", "MySQL", "Python", "C, C++", "Java", "Inne"),	"sublink"=>array("#", "#", "#", "#", "#", "#", "#")),
  array("act"=>false, "title"=>"Sieci",			"link"=>"#",		 "sub"=>true, "submenu"=>array("Windows", "Linux"), 												"sublink"=>array("#", "#")), 
  array("act"=>false, "title"=>"Pliki",			"link"=>"#",		 "sub"=>true, "submenu"=>array("Haks.pl", "DropBox"), 												"sublink"=>array("#", "#")),
  array("act"=>false, "title"=>"Wiedo",			"link"=>"#",		 "sub"=>false),
  array("act"=>false, "title"=>"Dobre strony",	"link"=>"#",		 "sub"=>false),
  array("act"=>false, "title"=>"Kontakt",		"link"=>"#",		 "sub"=>false));
$smarty->assign("menu",$menu);

//GDZIEJESTEM
$gdzie = array(
  "tytul"	=>	array("Kursy", "Java", "Lekcja 11"),
  "link"	=>	array("wp.pl", "#", "#"));
$smarty->assign("gdzie",$gdzie);

//ARTYKUŁ
$articcle = '<img src="img/logoimg.png" alt="" />
				Gracz przyjmuje zakład od swojego znajomego o to, kto pierwszy przy 
				użyciu własnego aerostatu dotrze na Biegun Północny. Wyścig rozpoczy
				namy od skonfigurowania "elementu napędowego", dzięki któremu balon nape
				łni się gorącym powietrzem i będzie w stanie unieść nas wraz z gondolą w
				powietrze. Nie zapominamy również o zrzuceniu balastu, odpowiednim usta
				ieniu kompasu oraz innych niezbędnych do lotu przyrządów.
				Będąc już w powietrzu naszym podstawowym zadaniem jest łapa
				nie możliwie najlepszych prądów powietrznych umożliwiających jak 
				najszybsze dotarcie na Biegun. Kolejną istotną kwestią są zapasy paliwa 
				oraz żywności,
				które trzeba będzie systematycznie uzupełniać lądując na napotkanych 
				na szlaku wyspach. Niejednokrotnie przyjdzie nam zwiedzić ogromne połacie 
				terenu zanim wyposażymy siebie i statek w odpowiedni ekwipunek.
				W trakcie rozgrywki nie skupiamy się jedynie na czynnościach bez
				pośrednio związanych z obsługą licznych urządzeń sterowniczych, szeregu 
				wskaźników, zegarów, liczników, ale upajamy się cudownymi widokami 
				oraz pięknem otaczającej nas zewsząd przy
				rody zapominając mimowolnie o podstawowym celu wyprawy.';
$article = array(
  "tytul"	=>	array("Programiści WebKitu zadowoleni z odejścia Google", "Programiści WebKitu zadowoleni z odejścia Google", "Programiści WebKitu zadowoleni z odejścia Google"),
  "link"	=>	array("http://wp.pl", "http://haks.pl", "http://haks.pl"),
  "tresc"	=>	array($articcle, $articcle, $articcle),
  "autor"	=>	array("pawel33317", "aryuro1819", "aryuro1819"),
  "data"	=>	array("13.03.2013", "13.03.2013", "13.03.2013"),
  "komenta"	=>	array("23 komentarzy", "12 komentarzy", "12 komentarzy"),
  "ocena"	=>	array("4", "4.5", "4.5")
);
$smarty->assign("article",$article);

//LOGOWANIE
$logowanie["user"]="pawel33317";
$logowanie["ranga"]="Administrator";
$logowanie["panel"]="http://haks.pl";
$logowanie["wyloguj"]="http://haks.pl";
$smarty->assign("logowanie",$logowanie);

//POPULARNE
$pop = array(
  "tytul"	=>	array("PhraseExpress 9.1.19d", "Java", "Lekcja 11","Java Runtime Environment","Defraggler 2.13.670","Process Explorer 15.30","WindowBlinds 7.4","Yahoo! Messenger","Linux Polska","Microsowt wired","ZoneAlarm Free"),
  "link"	=>	array("wp.pl", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#"));
$smarty->assign("pop",$pop);

//INFO
$info="Serwis będzie nieczynny w dniach 11.12 - 06.02 z powodu aktualizacji. Bardzo przepraszamy";
$smarty->assign("info",$info);

//FOOTER
$footer="Copyright © <strong>2013</strong>. Created by <strong>Paweł Czubak</strong>.<br>Valid <strong>HTML 5</strong> and <strong>CSS 3</strong>.";
$smarty->assign("footer",$footer);
$footerlnk = array(
  "tytul"	=>	array("GŁÓWNA", "INNE", "GALERIA", "INFORMACJE PRAWNE", "LICENCJA", "PORTFOLIO", "KONTAKT"),
  "link"	=>	array("wp.pl", "#", "#", "#", "#", "#", "#"));
$smarty->assign("footerlnk",$footerlnk);





$smarty->display('index.tpl');
?>
