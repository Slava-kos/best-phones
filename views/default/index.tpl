{* шаблон главной страницы *}



{foreach $rsProducts as $item name=products}
       {* <div style="float: left; padding: 0px 30px 40px 0px;">
            <a href="/product/{$item['id']}/">
                <img src="/images/products/{$item['image']}" width="100" />
            </a><br />
            <a href="/product/{$item['id']}/">{$item['name']}</a>
        </div>
        {if $smarty.foreach.products.iteration mod 3 == 0}
            <div style="clear: both;"></div>
        {/if} *}
        
         <div class="row">
    <div class="col s12 m7">
      <div class="card small">
        <div class="card-image">
          <img src="/images/products/{$item['image']}" width="100" />
          <span class="card-title">{$item['name']}</span>
        </div>
        {*<div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>*}
        <div class="card-action">
          <a href="/product/{$item['id']}/">Перейти к товару</a>
        </div>
      </div>
    </div>
  </div>
            
{/foreach}