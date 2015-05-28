<?php /* Smarty version Smarty-3.1.13, created on 2013-04-07 23:47:13
         compiled from ".\templates\meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28509516200a574d0f0-62373411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e24fa0a57a78490cf3b67c6a1c27e297a722667c' => 
    array (
      0 => '.\\templates\\meta.tpl',
      1 => 1365378419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28509516200a574d0f0-62373411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516200a574f152_55901396',
  'variables' => 
  array (
    'favi' => 0,
    'tytulStrony' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516200a574f152_55901396')) {function content_516200a574f152_55901396($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->     
	<link rel="stylesheet" href="templates/style.css" />
	<link rel="Shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favi']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['tytulStrony']->value;?>
</title>
</head><?php }} ?>