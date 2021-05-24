<?php
/* Smarty version 3.1.36, created on 2021-05-24 22:34:04
  from 'C:\xampp\htdocs\best-phones.local\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60ac0dbc46b0b4_48756030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da98209b67d320afc3652350b4a9d99803666977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\index.tpl',
      1 => 1621888435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_60ac0dbc46b0b4_48756030 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col s4">
      <?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="col s8">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          
      <div class="row">
        <div class="col s12 m7">
          <div class="card small">
            <div class="card-image">
              <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
              <span class="card-title white-text grey darken-2"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
            </div>
            <!--<div class="card-content"></div>-->
            <div class="card-action">
              <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">Перейти к товару</a>
            </div>
          </div>
        </div>
      </div>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div>
<?php }
}
