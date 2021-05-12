<?php
/* Smarty version 3.1.36, created on 2021-05-11 21:36:37
  from 'C:\xampp\htdocs\best-phones.local\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609adcc5256a20_63941855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53078bdcacc5621d95315345d70521d49e447cca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\leftcolumn.tpl',
      1 => 1620761792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609adcc5256a20_63941855 (Smarty_Internal_Template $_smarty_tpl) {
?>                
<div id="leftColumn">
            
            
 <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                  
                  <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                         --<a href='#'><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br />
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <?php }?>
                  
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
    
</div>
<?php }
}
