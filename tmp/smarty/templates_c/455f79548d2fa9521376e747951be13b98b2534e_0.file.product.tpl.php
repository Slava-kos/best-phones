<?php
/* Smarty version 3.1.36, created on 2021-05-25 00:10:11
  from 'C:\xampp\htdocs\best-phones.local\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60ac244348cec8_11771322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '455f79548d2fa9521376e747951be13b98b2534e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\product.tpl',
      1 => 1621894206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ac244348cec8_11771322 (Smarty_Internal_Template $_smarty_tpl) {
?>    

  <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
"> 
          <span class="card-title white-text grey darken-2"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</span>
        </div>
        <div class="card-content">
          <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
          <h4>Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 Наличие: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['status'];?>
</h4>
        </div>
        <div class="card-action">
          <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить из корзины</a>
          <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
        </div>
      </div>
    </div>
  </div><?php }
}
