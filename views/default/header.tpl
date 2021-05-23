<html>
    <head>
        <title>{$pageTitle}</title>
        <link rel="stylesheet" href="{$teplateWebPath}css/main.css" type="text/css"/>
        <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
        
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', () => {
  M.AutoInit();})</script>
    </head>
<body>
    
    <header> <nav class="red darken-4">
            <div class="container"> 
                <div class="nav-wrapper"> 
                    <a class="brand-logo" href="/">Best Phones</a> 
                    <ul class="right"> 
                        
                        <li><a   <a href="/cart/" title="Перейти в корзину">Корзина [{$cartCntItems}]</a></li> 
                        <li><a class="modal-trigger" href="#aboutModal">О нас</a></li> 
                    </ul> </div> 
            </div> </nav>
    </header>
    
        <div id="header">
            <h1>best-phones ever</h1>
        </div>
        
        
{include file='leftcolumn.tpl'}       
          
    <private>
  
  <div id="aboutModal" class="modal modal-fixed-footer" tabindex="0">
    <div class="modal-content"><h4>О Нас</h4>
      <p> 
        <br>
        Номер: +375297777788
        <br>
        Version: 2.0.0
        <br>
        Директор - Петров Федор Васильевич
        <br>
        Email: best-phones@gmail.com
        <br>
      </p>
    </div>
    <div class="modal-footer">
      <a href="#" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
  </div>
</private>





