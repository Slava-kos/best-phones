<?php
/* Smarty version 3.1.36, created on 2021-05-23 11:56:39
  from 'C:\xampp\htdocs\best-phones.local\views\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60aa26d72e2f90_62559967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae0cac0491c66470c88fdfe7fd7c4e6657ecd937' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\admin\\admin.tpl',
      1 => 1621763797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa26d72e2f90_62559967 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blockNewCategory">
    Новая категория:
    <input name="newCategoryName" id="newCategoryName" type="text" value="" />
    <br />
    
    Является подкатегорией для
    <select name="generalCatId">
        <option value="0">Главная Категория</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <br />
     <input type="button" onclick="newCategory();" value="Добавить категорию" />
</div>
<?php }
}
