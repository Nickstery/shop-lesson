<?php
/* Smarty version 3.1.30, created on 2017-01-24 20:50:28
  from "/Applications/XAMPP/xamppfiles/htdocs/views/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5887b0043bf9a3_80916998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbda2756c1663775140e0209c1adc071eb735e7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/layout.tpl',
      1 => 1485287426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5887b0043bf9a3_80916998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9501243855887b0043b9d93_90190019', 'title');
?>
</title>
    <link rel="stylesheet" type="text/css" href="../public/css/app.css">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="#">
                Some Branding
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/home">Home</a></li>
                <li><a href="/announcements">Announcements</a></li>
                <li><a href="/program" >Program</a></li>
                <li><a href="/contacts" >Contacts</a></li>
                <li><a href="/photos" >Photos</a></li>
                <li><a href="/registration" >Registration</a></li>
                <li><a href="/info" >Local info</a></li>

            </ul>

        </div>
    </div>
</nav>
<div class="container">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4467416045887b0043bd6e2_42364673', 'body');
?>

</div>
</body>
</html><?php }
/* {block 'title'} */
class Block_9501243855887b0043b9d93_90190019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_4467416045887b0043bd6e2_42364673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
