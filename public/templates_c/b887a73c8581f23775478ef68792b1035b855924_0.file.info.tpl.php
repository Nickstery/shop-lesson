<?php
/* Smarty version 3.1.30, created on 2017-01-24 20:43:47
  from "/Applications/XAMPP/xamppfiles/htdocs/views/info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5887ae73c1c0d8_28532352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b887a73c8581f23775478ef68792b1035b855924' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/info.tpl',
      1 => 1485287021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5887ae73c1c0d8_28532352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15848054415887ae73c16059_43190169', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3679888575887ae73c1a383_81330472', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_15848054415887ae73c16059_43190169 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_3679888575887ae73c1a383_81330472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My HTML Page Body goes here<?php
}
}
/* {/block 'body'} */
}
