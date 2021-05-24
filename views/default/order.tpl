{* страница заказа *}
<h2>Данные заказа</h2>
<form id="frmOrder" action="/cart/saveorder/" method="POST">
  <table>
    <tr>
      <td>№</td>
      <td>Наименование</td>
      <td>Количество</td>
      <td>Цена за единицу</td>
      <td>Стоимость</td>
    </tr>
    {foreach $rsProducts as $item name=products}
    <tr>
      <td>{$smarty.foreach.products.iteration}</td>
      <td><a href="/product/{$item['id']}/">{$item['name']}</a></td>
      <td>
      <span id="itemCnt_{$item['id']}">
                      <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}"/>
        {$item['cnt']}
      </span>
      </td>
      <td>
      <span id="itemPrice_{$item['id']}">
                      <input type="hidden" name="itemPrice_{$item['id']}" value="{$item['price']}"/>
        {$item['price']}
      </span>
      </td>
      <td>
      <span id="itemRealPrice_{$item['id']}">
      <input type="hidden" name="itemRealPrice_{$item['id']}" value="{$item['realPrice']}"/>
                          {$item['realPrice']}
           </span>
      </td>
    </tr>
    {/foreach}
  </table>
  {if isset($arUser)}
  {$buttonClass = ""}
  <h2>Данные заказчика</h2>
  <div id="orderUserInfoBox" {$buttonClass}>
    {$name = $arUser['name']}
    {$phone = $arUser['phone']}
    {$adress = $arUser['adress']}
    <table>
      <tr>
        <td>Имя*</td>
        <td>
          <input type="text" id="name" name="name" value="{$name}"/>
        </td>
      </tr>
      <tr>
        <td>Тел*</td>
        <td>
          <input type="text" id="phone" name="phone" value="{$phone}"/>
        </td>
      </tr>
      <tr>
        <td>Адрес*</td>
        <td>
          <textarea id="adress" name="adress"/>
          {$adress}</textarea></td>
      </tr>
    </table>
  </div>
  {else}
  <div id="loginBox">
    <a class="modal-trigger waves-effect waves-light btn" href="#loginModal">Авторизация</a>
  </div>
  <div id="registerBox">или
    <br/>
    <a class="modal-trigger waves-effect waves-light btn" href="#registerModal">Регистрация</a>
  </div>
{/if}
{if isset($arUser)}
<br>
<a class="waves-effect waves-light btn" onClick="saveOrder();">Оформить заказ</a>
{/if}
</form> 
