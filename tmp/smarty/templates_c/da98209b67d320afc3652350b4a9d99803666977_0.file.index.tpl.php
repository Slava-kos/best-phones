<?php
/* Smarty version 3.1.36, created on 2021-05-23 21:10:46
  from 'C:\xampp\htdocs\best-phones.local\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60aaa8b605dd77_91984194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da98209b67d320afc3652350b4a9d99803666977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\index.tpl',
      1 => 1621797042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aaa8b605dd77_91984194 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
               
         <div class="row">
    <div class="col s12 m7">
      <div class="card small">
        <div class="card-image">
          <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" />
          <span class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
        </div>
                <div class="card-action">
          <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">Перейти к товару</a>
        </div>
      </div>
    </div>
  </div>
            
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
