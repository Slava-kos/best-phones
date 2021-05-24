{* страница пользователя *}

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
            <input disabled value="{$arUser['email']}" id="email" type="text" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" id="newName" value="{$arUser['name']}">
            <label for="newName">Имя</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" id="newPhone" value="{$arUser['phone']}">
            <label for="newPhone">Телефон</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea id="newAdress" class="materialize-textarea">{$arUser['adress']}</textarea>
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

      {if !$rsUserOrders}
      <h2>Нет заказов</h2>
      {else}

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

          {foreach $rsUserOrders as $item name=orders}

          <tr>
            <td>{$smarty.foreach.orders.iteration}</td>
            <td>
              <a href="#" onclick="showProducts({$item['id']}); return false;">Показать товар заказа</a>
            </td>
            <td>{$item['id']}</td>
            <td>
              {if $item['status'] == 1}
              Заказ оплачен
              {else}
              Заказ не оплачен
              {/if}
            </td>
            <td>{$item['date_created']}</td>
            <td>{$item['date_payment']}&nbsp;</td>
            <td>{$item['comment']}</td>
          </tr>

          <tr class="hideme" id="purchasesForOrderId_{$item['id']}">
            <td colspan="7">
              {if $item['children']}
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
                  {foreach $item['children'] as $itemChild name=products}
                  <tr>
                    <td>{$smarty.foreach.products.iteration}</td>
                    <td>{$itemChild['product_id']}</td>
                    <td>
                      <a href="/product/{$itemChild['product_id']}/">{$itemChild['name']}</a>
                    </td>
                    <td>{$itemChild['price']}</td>
                    <td>{$itemChild['amount']}</td>
                  </tr>
                  {/foreach}
                </tbody>
              </table>
              {/if}
            </td>
          </tr>
          {/foreach}

        </tbody>
      </table>

      {/if}

    </div>
  </div>
</div>