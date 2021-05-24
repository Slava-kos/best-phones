{* Страница категории *}

<div class="container">
  <div class="row">
    <div class="col s4">
      {include file='leftcolumn.tpl'}
    </div>
    <div class="col s8">

      <h2>Товары категории {$rsCategory['name']}</h2>

      {foreach $rsProducts as $item name=products}

      <div class="row">
        <div class="col s12 m7">
          <div class="card small">
            <div class="card-image">
              <img src="/images/products/{$item['image']}">
              <span class="card-title white-text grey darken-2">{$item['name']}</span>
            </div>
            <!--<div class="card-content"></div>-->
            <div class="card-action">
              <a href="/product/{$item['id']}/">Перейти к товару</a>
            </div>
          </div>
        </div>
      </div>

      {/foreach}

      {foreach $rsChildCats as $item name=childCats}
      <h2>
        <a href="/category/{$item['id']}/">{$item['name']}</a>
      </h2>
      {/foreach}

     

    </div>
  </div>
</div>










