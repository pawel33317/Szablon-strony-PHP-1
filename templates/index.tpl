<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->     
	<link rel="stylesheet" href="templates/style.css" />
	<link rel="Shortcut icon" href="{$favi}" />
	<title>{$tytulStrony}</title>
</head>
<body>
	<section id="head">

		<header class="main">
			{section name=logo loop=$logo}
			<img src="{$logo[logo]}" alt=""/>
			{/section}
		</header>



	
		<nav class="main">
	        <ul id="nav">
				{foreach item=menui  from=$menu }
				<li><a {if $menui.sub == true}class="hsubs"{/if}href="{$menui.link}">{if $menui.act == true}<strong>{/if}{$menui.title}{if $menui.act == true}</strong>{/if}</a>
					{if $menui.sub == true}
					<ul class="subs">
						{section name=smenu loop=$menui.submenu}
						<li><a href="{$menui.sublink[smenu]}">{$menui.submenu[smenu]}</a></li>
						{/section}
					</ul>
					{/if}
				</li>
				{/foreach}
			</ul>
		</nav>

		<section class="main">
			{section name=share loop=$share}
			<img src="{$share[share]}" alt=""/>
			{/section}
		</section>




	</section>
	<div class="clear"></div>
	<!--<div id="uwaga1">Uwaga</div>-->
	<div id="artasi">
		<article class="main">
			<section id="adres">
				{section name=id loop=$gdzie.tytul}
				<a href="{$gdzielnk.link[id]}">{$gdzie.tytul[id]}</a>{if not $smarty.section.id.last} --> {/if}
				{/section}
			</section>
			
			{section name=idarticle loop=$article.tytul}
			<header>
				<div class="ahead1">
					<img src="img/tytad.png" alt=""/>
				</div>
				<div class="ahead2">
					<h1><a href="{$article.link[idarticle]}">{$article.tytul[idarticle]}</a></h1>
				</div>
				<div class="titledetails">DATA:{$article.data[idarticle]} | AUTOR: <a href="">{$article.autor[idarticle]}</a> </div>
			</header>
			<section class="article-content">
				<p>{$article.tresc[idarticle]}</p>
			</section>
			<footer class="fart">
				<img src="img/livejournal.png" alt=""/>
				<a href="">{$article.komenta[idarticle]}</a>
				<img src="img/wykop.png" alt=""/>
				<a href="">ocena: {$article.ocena[idarticle]}</a>
			</footer>
			<div class="clear"></div>
			
			{/section}
		</article>
		<aside class="main"> 
			<form action="index.html" method="get" class="searchform" style="">
				<input type="text" name="s" value="Szukaj..." onblur="if(this.value.length == 0) this.value='Szukaj...';" onclick="if(this.value == 'Szukaj...') this.value='';" id="search-text" class="search" />
				<button id="search-button" tabindex="2" type="submit" class="search-btn">GO</button>
			</form>
		</aside>
		<aside class="main logowanie">
			<h1>LOGOWANIE</h1>
			<img src="img/icons/Profile.png" alt="" />
			<p>Zalogowany:
				<a href="">{$logowanie["user"]}</a></p>
			<p>Ranga:
				<a href="">{$logowanie["ranga"]}</a></p>
			<div id="log">
				<a href="{$logowanie["wyloguj"]}">Wyloguj</a> | 
				<a href="{$logowanie["panel"]}">Panel</a>
			</div>
		</aside>
		<aside class="main">
			<h1>POPULARNE</h1>
			<div class="lista">
				{section name=id loop=$pop.tytul}
				<img src="img/strzalka.png" alt=""/><a href="{$pop.link[id]}">{$pop.tytul[id]}</a><br>
				{/section}
			</div>
		</aside>
		<aside class="main">
			<h1>INFO</h1>
			<div class="info">
				{$info}
			</div>
		</aside>
		<div class="clear"></div>
	</div>
	<footer class="main">
		{section name=id loop=$footerlnk.tytul}
		<a href="{$footerlnk.link[id]}">{$footerlnk.tytul[id]}</a>{if not $smarty.section.id.last} | {/if}
		{/section}
		<br>
		{$footer}
	</footer>
</body>
</html>

