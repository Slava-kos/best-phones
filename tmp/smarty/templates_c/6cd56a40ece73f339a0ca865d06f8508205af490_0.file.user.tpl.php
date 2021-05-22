<?php
/* Smarty version 3.1.36, created on 2021-05-21 11:51:23
  from 'C:\xampp\htdocs\best-phones.local\views\default\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60a7829bbf2ea7_84833530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd56a40ece73f339a0ca865d06f8508205af490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\user.tpl',
      1 => 1621590665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7829bbf2ea7_84833530 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Ваши регистрационные даные:</h1>
<table border="0">
        <tr>
            <td>Логин (email)</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
        </tr>
        <tr>
            <td>Имя</td>
            <td><input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" /></td>
        </tr>
        <tr>
            <td>Тел</td>
            <td><input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" /></td>
        </tr>
        <tr>
            <td>Адрес</td>
            <td><textarea  id="newAdress"  /><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
        </tr>
        <tr>
            <td>Новый пароль</td>
            <td><input type="password" id="newPwd1" value="" /></td>
        </tr>
        <tr>
            <td>Повтор пароля</td>
            <td><input type="password" id="newPwd2" value="" /></td>
        </tr>
        <tr>
            <td>Для того чтобы сохранить данные введите текущий пароль</td>
            <td><input type="password" id="curPwd" value="" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="button" value="Сохранить изменения" onClick="updateUserData();"/></td>
        </tr>
</table>
<?php }
}
