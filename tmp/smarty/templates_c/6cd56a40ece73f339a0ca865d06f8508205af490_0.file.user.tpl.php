<?php
/* Smarty version 3.1.36, created on 2021-05-24 01:10:38
  from 'C:\xampp\htdocs\best-phones.local\views\default\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60aae0eec4f9d1_61845133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd56a40ece73f339a0ca865d06f8508205af490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\user.tpl',
      1 => 1621811434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aae0eec4f9d1_61845133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>Ваши регистрационные даные</h1>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <form class="col s12">

        <div class="row">
          <div class="input-field col s12">
            <input disabled value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
" id="email" type="text" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
">
            <label for="newName">Имя</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
">
            <label for="newPhone">Телефон</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea id="newAdress" class="materialize-textarea"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea>
            <label for="newAdress">Адрес</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="password" id="curPwd" value="">
            <label for="curPwd">Текущий пароль</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="password" id="newPwd1" value="">
            <label for="newPwd1">Новый пароль</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="password" id="newPwd2" value="">
            <label for="newPwd2">Повтор пароля</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <a class="waves-effect waves-light btn" onClick="updateUserData();">Сохранить изменения</a>
          </div>
        </div>

      </form>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <h1>Заказы</h1>
    </div>
  </div>

  <div class="row">
    <div class="col s12">

      <?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
      <h2>Нет заказов</h2>
      <?php } else { ?>

      <table>
        <thead>
          <tr>
            <th>№</th>
            <th>Действие</th>
            <th>ID заказа</th>
            <th>Статус</th>
            <th>Дата создания</th>
            <th>Дата оплаты</th>
            <th>Дополнительная информация</th>
          </tr>
        </thead>

        <tbody>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsUserOrders']->value, 'item', false, NULL, 'orders', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']++;
?>

          <tr>
            <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration'] : null);?>
</td>
            <td>
              <a href="#" onclick="showProducts(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;">Показать товар заказа</a>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?>
              Заказ оплачен
              <?php } else { ?>
              Заказ не оплачен
              <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
&nbsp;</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
          </tr>

          <tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <td colspan="7">
              <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
              <table>
                <thead>
                  <tr>
                    <th>№</th>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                  <tr>
                    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</td>
                    <td>
                      <a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
                  </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
              <?php }?>
            </td>
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
      </table>

      <?php }?>

    </div>
  </div>
</div><?php }
}
