<?php /* Smarty version Smarty-3.1.13, created on 2013-04-08 00:18:45
         compiled from ".\templates\aa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1508051620b917667f7-78261458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3dedceaac8e464504150c5892cff5e146da44ea' => 
    array (
      0 => '.\\templates\\aa.tpl',
      1 => 1365380078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508051620b917667f7-78261458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51620b917c9452_64115414',
  'variables' => 
  array (
    'pracownicy' => 0,
    'pracownik' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51620b917c9452_64115414')) {function content_51620b917c9452_64115414($_smarty_tpl) {?><html>
<body>
<table><tr><td>Imiê</td><td>Stanowisko</td></tr></table>
<?php  $_smarty_tpl->tpl_vars['pracownik'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pracownik']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pracownicy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pracownik']->key => $_smarty_tpl->tpl_vars['pracownik']->value){
$_smarty_tpl->tpl_vars['pracownik']->_loop = true;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['stanowisko'];?>
</td>
</tr>
<?php } ?>
</body>
 </html><?php }} ?>