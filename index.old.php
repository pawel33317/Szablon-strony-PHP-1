<?php 
include 'config.php';
include ("libs/Smarty.class.php");
$smarty = new Smarty();
session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	if(isset($_GET["out"])){
		if($_GET["out"] == 1){
			$_SESSION = array();
			setcookie(session_name(), '', time()-42000); 
			setcookie("login", 'vcv', time()-3600*24*7);
			setcookie("haslo", 'vcvc', time()-3600*24*7);
			session_destroy();
    			header('Location: index.php');
    			exit;
		}
	}
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	if(isset($_POST["haslo"])){
    		session_destroy();	
    		session_start();
    	}
}
if (!isset($_SESSION['inicjuj'])){
	
	
	$_SESSION['inicjuj'] = true;
	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
  	$_SESSION['zalogowany'] = 0;

  	$licznik = mysql_fetch_array(mysql_query('select wartosc from licznik where nazwa = "glowny"'));
  	$nowawartosc = $licznik['wartosc']+1;
  	mysql_query('update licznik set wartosc = '.$nowawartosc.' where nazwa = "glowny"');


  	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	    	if(isset($_POST['login'])){
	    		$plogin = addslashes(htmlspecialchars($_POST['login']));
	    		$phaslo = addslashes(htmlspecialchars($_POST['haslo']));
	      	$userr = mysql_fetch_array(mysql_query('select haslo from userzy where login = "'.$plogin.'"'));
	     		if(md5($phaslo) == $userr["haslo"]){
	        		$_SESSION['zalogowany'] = 1;
	        		$_SESSION['login'] = $plogin;
				setcookie("login", $_SESSION['login'], time()+3600*24*7);
				setcookie("haslo", $userr["haslo"], time()+3600*24*7);
	    		}
	      	else{
	        		$_SESSION['zalogowany'] = 2;
	        		$alert['czy'] = true;
          			$alert['tresc'] = "Złe hasło";
          			$smarty->assign("alert",$alert);
	      	}               
  		}
  	}

	elseif(isset($_COOKIE['login'])){
    		$userr = mysql_fetch_array(mysql_query('select haslo from userzy where login = "'.$_COOKIE['login'].'"'));
    		if($_COOKIE['haslo'] == $userr["haslo"]){
      		$_SESSION['zalogowany'] = 1;
      		$_SESSION['login'] = $_COOKIE['login'];
      		setcookie("login", $_SESSION['login'], time()+3600*24*7);
			setcookie("haslo", $userr["haslo"], time()+3600*24*7);
    		}
    		else{
      		die('Hahahahahahahahahahahaha!');
    		}
  	}
}
if($_SESSION['ip'] != $_SERVER['REMOTE_ADDR']){
	die('Hahahahahahahahahahahaha!');      
}

//LOGIN
if($_SESSION['zalogowany'] == 1){
    mysql_query('update userzy set datalast = '.time().' where login = "'.$_SESSION['login'].'"');
	$login['czy'] = true;
	$login['nick'] = $_SESSION['login'];
}
else{
	$login['czy'] = false;
}
$smarty->assign("login",$login);




//META
$tytulStrony = mysql_fetch_array(mysql_query('select tresc from inne where nazwa = "tytulStrony"'));
$smarty->assign("tytulStrony",$tytulStrony["tresc"]);

$favi = mysql_fetch_array(mysql_query('select tresc from inne where nazwa = "favi"'));
$smarty->assign("favi",$favi["tresc"]);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//LOGO
$logo = array("img/logon1.png", "img/logon2.png");
$smarty->assign("logo",$logo);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//LOGO JS
$logojs = array("img/logo.png", "img/logot.png");
$smarty->assign("logojs",$logojs);


//GDZIEJESTEM
if (isset($_GET['id'])){
  $wynik = mysql_fetch_array(mysql_query('select * from kategorie where id = '.$_GET["id"].''));
  $gdzie["tytul"][0] = $wynik['nazwa'];
  $gdzie["link"][0] = $wynik['link'];
  $gdzie["id"][0] = $wynik['id'];
  if ($wynik['idnadrzednej'] !=0){
    $wynik = mysql_fetch_array(mysql_query('select * from kategorie where id = '.$wynik['idnadrzednej'].''));
    $gdzie["tytul"][1] = $gdzie["tytul"][0];
    $gdzie["link"][1] = $gdzie["link"][0];
    $gdzie["tytul"][0] = $wynik['nazwa'];
    $gdzie["link"][0] = $wynik['link'];
    $gdzie["id"][1] = $wynik['id'];
  }
}
else {
  $gdzie["tytul"][0] = "Strona Główna";
  $gdzie["link"][0] = "index.php";
}
$smarty->assign("gdzie",$gdzie);

//MENU
$all = mysql_query('select * from kategorie where idnadrzednej = 0 and showw = 1');
$i=0;
error_reporting(0);
while($linia=mysql_fetch_array($all)){
                 $menu[$i]["act"]        = false;
                 if((!isset($_GET['id'])) && ($i==0))   $menu[$i]["act"] = true;
                 if(($gdzie["id"][1] == $linia["id"]) || ($gdzie["id"][0] == $linia["id"]) )$menu[$i]["act"] = true;
  $menu[$i]["title"]      = $linia["nazwa"];
  $menu[$i]["link"]       = $linia["link"];
  $spr = mysql_num_rows(mysql_query('select id from kategorie where idnadrzednej = '.$linia["id"].''));
  $menu[$i]["sub"]        = false;
  if ($spr){
    $menu[$i]["sub"]      = 1;
    $j=0;
    $alll = mysql_query('select * from kategorie where idnadrzednej = '.$linia["id"].'');
    while($liniaa=mysql_fetch_array($alll)){
      $menu[$i]["submenu"][$j] = $liniaa["nazwa"];
      $menu[$i]["sublink"][$j] = $liniaa["link"];
    $j++;
    }
  }
  $i++;
}
$smarty->assign("menu",$menu);




//ARTYKUŁ
if(!isset($_GET['id'])){
	$all = mysql_query('select * from artykuly ORDER BY id DESC LIMIT 10');
}
else{
	$all = mysql_query('select * from artykuly where idkategorii = '.$_GET['id'].' ORDER BY id DESC LIMIT 10');
}
$i=0;
while($linia=mysql_fetch_array($all)){
  $article["tytul"][$i] 		= $linia["tytul"];
  $article["id"][$i]        = $linia["id"];
  $article["czyedit"][$i]   = $linia["czyedit"];
  $article["dataedit"][$i]  = date("d-m-Y",$linia["dataedit"]);
  $article["link"][$i] 		  = "#";
	$article["tresc"][$i] 		= $linia["wstep"];
  $wynik = mysql_fetch_array(mysql_query('select imie, nazwisko from userzy where id = '.$linia["idautora"].''));
	$article["autor"][$i] 		= $wynik["imie"].' '.$wynik["nazwisko"];
	$article["data"][$i] 	   	= date("d-m-Y",$linia["data"]);
  $spr = mysql_num_rows(mysql_query('select id from komentarze where idartykulu = '.$linia["id"].''));
	$article["komenta"][$i] 	= $spr;
  $spr = mysql_fetch_array(mysql_query('select nazwa from kategorie where id = '.$linia["idkategorii"].''));
  $article["kategoria"][$i]   = $spr['nazwa'];
	$i++;
}
$smarty->assign("article",$article);

//KATEGORIE
$all = mysql_query('select * from kategorie where showw = 1 and idnadrzednej > 0 ORDER BY id ASC LIMIT 10');
$i=0;
while($linia=mysql_fetch_array($all)){
  $kategorie["tytul"][$i]     = $linia["nazwa"];
  $kategorie["link"][$i]      = $linia["link"];
  $i++;
}
$smarty->assign("kategorie",$kategorie);

//NAJNOWSZE
$all = mysql_query('select tytul, id from artykuly ORDER BY id DESC LIMIT 12');
$i=0;
while($linia=mysql_fetch_array($all)){
    $tmp = substr($linia["tytul"],0,26);
    if (strlen($linia["tytul"])>25)$tmp.='...';
    $najnowsze["tytul"][$i]     = $tmp;
    $najnowsze["link"][$i]      = 'show.php?id='.$linia["id"];
  $i++;
}
$smarty->assign("najnowsze",$najnowsze);

//NAJPOPULARNIEJSZE
$all = mysql_query('select tytul, id from artykuly ORDER BY wejscia ASC LIMIT 12');
$i=0;
while($linia=mysql_fetch_array($all)){
    $tmp = substr($linia["tytul"],0,26);
    if (strlen($linia["tytul"])>25)$tmp.='...';
    $najpopularniejsze["tytul"][$i]     = $tmp;
    $najpopularniejsze["link"][$i]      = 'show.php?id='.$linia["id"];
  $i++;
}
$smarty->assign("najpopularniejsze",$najpopularniejsze);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//LINKI
$linki = array(
  "tytul"	=>	array("Kurs JavaScript", "Sublime edytor", "CKEditor JS", "SyntaxHighlighter", "Kurs Smarty", "Kurs Java YT", "InternetMap"),
  "link"	=>	array("http://www.doman.art.pl/kursjs/", "http://www.sublimetext.com/", "http://ckeditor.com/", "http://alexgorbatchev.com/SyntaxHighlighter/", "http://funkcje.net/view/4/7/41/", 
  						"http://www.youtube.com/user/CoraxTheTutor/videos?view=1", "http://internet-map.net/", "#", "#", "#", "#"));
$smarty->assign("linki",$linki);

//FOOTER
$footer = mysql_fetch_array(mysql_query('select tresc from inne where nazwa = "footer"'));
$smarty->assign("footer",$footer["tresc"]);


$all = mysql_query('select * from kategorie where showw = 1 and idnadrzednej = 0 ORDER BY id ASC LIMIT 10');
$i=0;
while($linia=mysql_fetch_array($all)){
  $footerlnk["tytul"][$i]     = $linia["nazwa"];
  $footerlnk["link"][$i]      = $linia["link"];
  $i++;
}
$smarty->assign("footerlnk",$footerlnk);

//LICZNIK
$licznikglowny = mysql_fetch_array(mysql_query('select wartosc from licznik where nazwa = "glowny"'));
$smarty->assign("licznikglowny",$licznikglowny["wartosc"]);


$smarty->display('index.tpl');
?>