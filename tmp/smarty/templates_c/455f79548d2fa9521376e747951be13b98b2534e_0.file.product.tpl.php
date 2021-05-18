<?php
/* Smarty version 3.1.36, created on 2021-05-18 22:30:41
  from 'C:\xampp\htdocs\best-phones.local\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60a423f13c0e04_17884189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '455f79548d2fa9521376e747951be13b98b2534e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\product.tpl',
      1 => 1621369820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a423f13c0e04_17884189 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>
    
<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">  
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 Наличие: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['status'];?>


<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"  href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
<p> Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
<?php }
}
