{* левый столбец*}

<ul class="collection with-header">

  {foreach $rsCategories as $item}

  <li class="collection-header">
    <h4>
      <a href="/category/{$item['id']}/">{$item['name']}</a>
    </h4>
  </li>

  {if isset($item['children'])}
  {foreach $item['children'] as $itemChild}

  <li class="collection-item">
    <a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a>
  </li>

  {/foreach}
  {/if}

  {/foreach}
</ul>