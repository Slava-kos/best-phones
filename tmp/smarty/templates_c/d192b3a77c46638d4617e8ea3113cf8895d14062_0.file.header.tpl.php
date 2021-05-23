<?php
/* Smarty version 3.1.36, created on 2021-05-23 22:05:12
  from 'C:\xampp\htdocs\best-phones.local\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60aab578db2e57_56956057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd192b3a77c46638d4617e8ea3113cf8895d14062' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\header.tpl',
      1 => 1621800309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_60aab578db2e57_56956057 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css"/>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
        
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>document.addEventListener('DOMContentLoaded', () => {
  M.AutoInit();})<?php echo '</script'; ?>
>
    </head>
<body>
    
    <header> <nav class="red darken-4">
            <div class="container"> 
                <div class="nav-wrapper"> 
                    <a class="brand-logo" href="/">Best Phones</a> 
                    <ul class="right"> 
                        
                        <li><a   <a href="/cart/" title="Перейти в корзину">Корзина [<?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
]</a></li> 
                        <li><a class="modal-trigger" href="#aboutModal">О нас</a></li> 
                    </ul> </div> 
            </div> </nav>
    </header>
    
        <div id="header">
            <h1>best-phones ever</h1>
        </div>
        
        
<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>       
          
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





<?php }
}
