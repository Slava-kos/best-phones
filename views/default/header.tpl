<html>
  <head>
    <title>{$pageTitle}</title>
    {*<link rel="stylesheet" href="{$teplateWebPath}css/main.css" type="text/css"/>*}
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>document.addEventListener('DOMContentLoaded', () => {
      M.AutoInit();
    });</script>
    <style>body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  main {
    flex: 1 0 auto;
  }</style>
  </head>
  <body>

    <header>
      <nav class="red darken-4 ">
        <div class="container">
          <div class="nav-wrapper">
            <a class="brand-logo" href="/">Best Phones</a>
            <ul class="right">
              <li>
                <a {*class="black-text"*} href="/cart/" title="Перейти в корзину">Корзина [{$cartCntItems}]</a>
              </li>
              <li>
                <a class="modal-trigger" href="#aboutModal">О нас</a>
              </li>

              {if !isset($arUser)}
              <li>
                <a class="modal-trigger" href="#loginModal">Авторизация</a>
              </li>
              <li>
                <a class="modal-trigger" href="#registerModal">Регистрация</a>
              </li>
              {else}
              <li>
                <a href="/user/">{$arUser['displayName']}</a>
              </li>
              <li>
                <a href="/user/logout/">Выход</a>
              </li>
              {/if}

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
                   <a class="waves-effect waves-light btn" onClick="registerNewUser();">Зарегистрироваться</a>
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
                  <a class="waves-effect waves-light btn" onClick="login();">Войти</a>
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
  <main>



