<?php
/* Smarty version 4.3.4, created on 2024-11-03 18:30:48
  from '/var/www/trabajo/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6727b348ed41d7_27867324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506c07d5f63080cc6bcea7e3f8ca227c83a31b2c' => 
    array (
      0 => '/var/www/trabajo/prestashop/themes/classic/templates/index.tpl',
      1 => 1730652210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6727b348ed41d7_27867324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9593562536727b348ed2825_03964955', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17757779116727b348ed2bf7_06928660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_21271362866727b348ed34b7_57299882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_16289594306727b348ed3184_45257449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21271362866727b348ed34b7_57299882', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9593562536727b348ed2825_03964955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_9593562536727b348ed2825_03964955',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17757779116727b348ed2bf7_06928660',
  ),
  'page_content' => 
  array (
    0 => 'Block_16289594306727b348ed3184_45257449',
  ),
  'hook_home' => 
  array (
    0 => 'Block_21271362866727b348ed34b7_57299882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17757779116727b348ed2bf7_06928660', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16289594306727b348ed3184_45257449', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
