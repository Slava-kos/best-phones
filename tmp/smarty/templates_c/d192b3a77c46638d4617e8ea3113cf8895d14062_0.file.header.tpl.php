<?php
/* Smarty version 3.1.36, created on 2021-05-24 00:15:56
  from 'C:\xampp\htdocs\best-phones.local\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60aad41c563cc9_95685822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd192b3a77c46638d4617e8ea3113cf8895d14062' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\header.tpl',
      1 => 1621808152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aad41c563cc9_95685822 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>document.addEventListener('DOMContentLoaded', () => {
      M.AutoInit();
    });<?php echo '</script'; ?>
>
  </head>
  <body>

    <header>
      <nav class="red darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a class="brand-logo" href="/">Best Phones</a>
            <ul class="right">
              <li>
                <a href="/cart/" title="Перейти в корзину">Корзина [<?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
]</a>
              </li>
              <li>
                <a class="modal-trigger" href="#aboutModal">О нас</a>
              </li>

              <?php if (!(isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>
              <li>
                <a class="modal-trigger" href="#loginModal">Авторизация</a>
              </li>
              <li>
                <a class="modal-trigger" href="#registerModal">Регистрация</a>
              </li>
              <?php } else { ?>
              <li>
                <a href="/user/"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a>
              </li>
              <li>
                <a href="/user/logout/">Выход</a>
              </li>
              <?php }?>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <private>
      <div id="registerModal" class="modal modal-fixed-footer" tabindex="0">
        <div class="modal-content"><h4>Регистрация</h4>
          <div class="container">
            <form class="col s12" id="registerBox">
              <div class="row">
                <div class="input-field col s12">
                  <input type="text" id="email" name="email" value="">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="password" id="pwd1" name="pwd1" value="">
                  <label for="pwd1">Пароль</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="password" id="pwd2" name="pwd2" value="">
                  <label for="pwd2">Повторить пароль</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">Закрыть</a>
        </div>
      </div>

      <div id="loginModal" class="modal modal-fixed-footer" tabindex="0">
        <div class="modal-content"><h4>Авторизация</h4>
          <div class="container">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <input type="text" id="loginEmail" name="loginEmail" value=""/>
                  <label for="loginEmail">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="password" id="loginPwd" name="loginPwd" value=""/>
                  <label for="loginPwd">Пароль</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="button" onclick="login();" value="Войти"/>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">Закрыть</a>
        </div>
      </div>

      <div id="aboutModal" class="modal modal-fixed-footer" tabindex="0">
        <div class="modal-content"><h4>О Нас</h4>
          <p>
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
          <a href="#" class="modal-close waves-effect waves-green btn-flat">Закрыть</a>
        </div>
      </div>
    </private>




<?php }
}
