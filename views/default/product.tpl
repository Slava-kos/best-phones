{* страница продукта *}
{*<h3>{$rsProduct['name']}</h3>*}
    
{*<img width="575" src="/images/products/{$rsProduct['image']}">  
Стоимость: {$rsProduct['price']} Наличие: {$rsProduct['status']}

<a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}class="hideme"{/if} href="#" onClick="removeFromCart({$rsProduct['id']}); return false;" alt="Удалить из корзины">Удалить из корзины</a>
<a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"{/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a>  
<p> Описание <br />{$rsProduct['description']}</p> *}

  <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img width="575" src="/images/products/{$rsProduct['image']}"> 
          <span class="card-title white-text grey darken-2">{$rsProduct['name']}</span>
        </div>
        <div class="card-content">
          <p>{$rsProduct['description']}</p>
          <h4>Стоимость: {$rsProduct['price']} Наличие: {$rsProduct['status']}</h4>
        </div>
        <div class="card-action">
          <a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}class="hideme"{/if} href="#" onClick="removeFromCart({$rsProduct['id']}); return false;" alt="Удалить из корзины">Удалить из корзины</a>
          <a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"{/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a>
        </div>
      </div>
    </div>
  </div>