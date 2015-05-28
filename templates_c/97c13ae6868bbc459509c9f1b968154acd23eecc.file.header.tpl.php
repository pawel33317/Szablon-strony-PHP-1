<?php /* Smarty version Smarty-3.1.13, created on 2013-04-09 00:07:14
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113475684251633f92597fe1-42422837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1365457685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113475684251633f92597fe1-42422837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'favi' => 0,
    'tytulStrony' => 0,
    'logo' => 0,
    'share' => 0,
    'menu' => 0,
    'menui' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51633f92626491_64015013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51633f92626491_64015013')) {function content_51633f92626491_64015013($_smarty_tpl) {?><!DOCTYPE html>
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
	<div class="clear"></div>
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
	<div class="clear"></div>
	
	









<?php }} ?>