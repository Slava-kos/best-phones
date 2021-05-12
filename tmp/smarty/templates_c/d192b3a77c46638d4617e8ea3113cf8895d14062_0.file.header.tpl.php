<?php
/* Smarty version 3.1.36, created on 2021-05-12 19:21:05
  from 'C:\xampp\htdocs\best-phones.local\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609c0e817ed483_34801626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd192b3a77c46638d4617e8ea3113cf8895d14062' => 
    array (
      0 => 'C:\\xampp\\htdocs\\best-phones.local\\views\\default\\header.tpl',
      1 => 1620839621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_609c0e817ed483_34801626 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css"/>
    </head>
    <body>
        <div id="header">
            <h1>best-phones - интернет магазин</h1>
        </div>
        
        
<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>       
        
        
<div  id="centerColumn">





<?php }
}
