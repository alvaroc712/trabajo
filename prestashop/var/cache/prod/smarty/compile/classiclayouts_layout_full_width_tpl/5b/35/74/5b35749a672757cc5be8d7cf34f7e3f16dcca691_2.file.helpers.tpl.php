<?php
/* Smarty version 4.3.4, created on 2024-11-03 18:30:48
  from '/var/www/trabajo/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6727b348f1f595_26773711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b35749a672757cc5be8d7cf34f7e3f16dcca691' => 
    array (
      0 => '/var/www/trabajo/prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1730652210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6727b348f1f595_26773711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/trabajo/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/5b/35/74/5b35749a672757cc5be8d7cf34f7e3f16dcca691_2.file.helpers.tpl.php',
    'uid' => '5b35749a672757cc5be8d7cf34f7e3f16dcca691',
    'call_name' => 'smarty_template_function_renderLogo_19764087706727b348f164c3_13871513',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_19764087706727b348f164c3_13871513 */
if (!function_exists('smarty_template_function_renderLogo_19764087706727b348f164c3_13871513')) {
function smarty_template_function_renderLogo_19764087706727b348f164c3_13871513(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_19764087706727b348f164c3_13871513 */
}
