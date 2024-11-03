<?php
/* Smarty version 4.3.4, created on 2024-11-03 18:32:15
  from '/var/www/trabajo/prestashop/admin866hffhrxftzxznv50x/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6727b39f9eebf1_46171264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'babe5a9d7f4094d4e2e9cd267ef9b328ab9d10f1' => 
    array (
      0 => '/var/www/trabajo/prestashop/admin866hffhrxftzxznv50x/themes/default/template/content.tpl',
      1 => 1730652220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6727b39f9eebf1_46171264 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
