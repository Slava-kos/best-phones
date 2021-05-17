{* страница продукта *}
<h3>{$rsProduct['name']}</h3>
    
<img width="575" src="/images/products/{$rsProduct['image']}">  
Стоимость: {$rsProduct['price']} Наличие: {$rsProduct['status']}

<a href="#" alt="Добавить в корзину">Добавить в корзину</a>
<p> Описание <br />{$rsProduct['description']}</p>
