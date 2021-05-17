<?php
/* Smarty version 3.1.36, created on 2021-05-13 20:07:32
  from 'C:\xampp\htdocs\best-phones.local\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609d6ae44d7546_67729711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '455f79548d2fa9521376e747951be13b98b2534e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\product.tpl',
      1 => 1620929234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609d6ae44d7546_67729711 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>
    
<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">  
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 Наличие: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['status'];?>


<a href="#" alt="Добавить в корзину">Добавить в корзину</a>
<p> Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
<?php }
}
