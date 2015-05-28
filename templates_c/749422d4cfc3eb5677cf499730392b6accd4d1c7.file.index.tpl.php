<?php /* Smarty version Smarty-3.1.13, created on 2013-09-04 19:13:47
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21025516200657fc309-13306189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1375805009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21025516200657fc309-13306189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51620065859888_62041867',
  'variables' => 
  array (
    'favi' => 0,
    'tytulStrony' => 0,
    'logo' => 0,
    'menu' => 0,
    'menui' => 0,
    'share' => 0,
    'gdzie' => 0,
    'gdzielnk' => 0,
    'article' => 0,
    'logowanie' => 0,
    'pop' => 0,
    'info' => 0,
    'footerlnk' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51620065859888_62041867')) {function content_51620065859888_62041867($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->     
	<link rel="stylesheet" href="templates/style.css" />
	<link rel="Shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favi']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['tytulStrony']->value;?>
</title>
</head>
<body>
	<section id="head">

		<header class="main">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['logo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['name'] = 'logo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['logo']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total']);
?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logo']['index']];?>
" alt=""/>
			<?php endfor; endif; ?>
		</header>



	
		<nav class="main">
	        <ul id="nav">
				<?php  $_smarty_tpl->tpl_vars['menui'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menui']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menui']->key => $_smarty_tpl->tpl_vars['menui']->value){
$_smarty_tpl->tpl_vars['menui']->_loop = true;
?>
				<li><a <?php if ($_smarty_tpl->tpl_vars['menui']->value['sub']==true){?>class="hsubs"<?php }?>href="<?php echo $_smarty_tpl->tpl_vars['menui']->value['link'];?>
"><?php if ($_smarty_tpl->tpl_vars['menui']->value['act']==true){?><strong><?php }?><?php echo $_smarty_tpl->tpl_vars['menui']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['menui']->value['act']==true){?></strong><?php }?></a>
					<?php if ($_smarty_tpl->tpl_vars['menui']->value['sub']==true){?>
					<ul class="subs">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['name'] = 'smenu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menui']->value['submenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['menui']->value['sublink'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['menui']->value['submenu'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']];?>
</a></li>
						<?php endfor; endif; ?>
					</ul>
					<?php }?>
				</li>
				<?php } ?>
			</ul>
		</nav>

		<section class="main">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['share'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['share']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['name'] = 'share';
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['share']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['share']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['share']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['share']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['share']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['share']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['share']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['share']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['share']['total']);
?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['share']->value[$_smarty_tpl->getVariable('smarty')->value['section']['share']['index']];?>
" alt=""/>
			<?php endfor; endif; ?>
		</section>




	</section>
	<div class="clear"></div>
	<!--<div id="uwaga1">Uwaga</div>-->
	<div id="artasi">
		<article class="main">
			<section id="adres">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gdzie']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['gdzielnk']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['gdzie']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['id']['last']){?> --> <?php }?>
				<?php endfor; endif; ?>
			</section>
			
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['name'] = 'idarticle';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['article']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total']);
?>
			<header>
				<div class="ahead1">
					<img src="img/tytad.png" alt=""/>
				</div>
				<div class="ahead2">
					<h1><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a></h1>
				</div>
				<div class="titledetails">DATA:<?php echo $_smarty_tpl->tpl_vars['article']->value['data'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
 | AUTOR: <a href=""><?php echo $_smarty_tpl->tpl_vars['article']->value['autor'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a> </div>
			</header>
			<section class="article-content">
				<p><?php echo $_smarty_tpl->tpl_vars['article']->value['tresc'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</p>
			</section>
			<footer class="fart">
				<img src="img/livejournal.png" alt=""/>
				<a href=""><?php echo $_smarty_tpl->tpl_vars['article']->value['komenta'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
				<img src="img/wykop.png" alt=""/>
				<a href="">ocena: <?php echo $_smarty_tpl->tpl_vars['article']->value['ocena'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
			</footer>
			<div class="clear"></div>
			
			<?php endfor; endif; ?>
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
				<a href=""><?php echo $_smarty_tpl->tpl_vars['logowanie']->value["user"];?>
</a></p>
			<p>Ranga:
				<a href=""><?php echo $_smarty_tpl->tpl_vars['logowanie']->value["ranga"];?>
</a></p>
			<div id="log">
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["wyloguj"];?>
">Wyloguj</a> | 
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["panel"];?>
">Panel</a>
			</div>
		</aside>
		<aside class="main">
			<h1>POPULARNE</h1>
			<div class="lista">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pop']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
				<img src="img/strzalka.png" alt=""/><a href="<?php echo $_smarty_tpl->tpl_vars['pop']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['pop']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><br>
				<?php endfor; endif; ?>
			</div>
		</aside>
		<aside class="main">
			<h1>INFO</h1>
			<div class="info">
				<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

			</div>
		</aside>
		<div class="clear"></div>
	</div>
	<footer class="main">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['footerlnk']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['footerlnk']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['footerlnk']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['id']['last']){?> | <?php }?>
		<?php endfor; endif; ?>
		<br>
		<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

	</footer>
</body>
</html>

<?php }} ?>