{* Header *}
 <title>{$pageTitle}</title>
    <link rel="stylesheet" href="{$teplateWebPath}css/main.css" type="text/css"/>
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', () => {
      M.AutoInit();
    });</script>
<html>
    <head>
        <title>{$pageTitle}</title>
        <link rel="stylesheet" href="{$teplateWebPath}css/main.css" type="text/css" />
        <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="{$teplateWebPath}js/admin.js"></script>
    </head>
    
    <body>
        <div id="header">
            <h1>Управление сайтом</h1>
        </div>
{include file='adminLeftcolumn.tpl'}
<div id="centerColumn">   