<?php
/* Smarty version 3.1.32-dev-31, created on 2018-01-16 16:34:19
  from "C:\xampp\htdocs\wt_proj\templates\leftnav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-31',
  'unifunc' => 'content_5a5e1b7b3913a7_10396479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acc2ac2b99e48d1ed4537e322f289884efb04358' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wt_proj\\templates\\leftnav.tpl',
      1 => 1512725681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e1b7b3913a7_10396479 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="col-md-3">
                <?php if (!isset($_smarty_tpl->tpl_vars['uid']->value)) {?>
                    <h4 class="text-primary">Hello, visitor!</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="?act=register">Register</a> </li>
                       
                        <li><a href="?act=login">Login</a></li>
                        
                    </ul>
                    <div class="blankspace"></div>
                <?php }?>
                
      
                <?php if (isset($_smarty_tpl->tpl_vars['uid']->value)) {?>
                    <h4 class="text-primary">Welcome, <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
!</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Profile</li>
                        <li><a href="?act=accsett">User Settings</a></li>
                        <li><a href="?act=logout">Logout </a></li>
                    </ul>           
                <?php }?>
                  
</div><?php }
}
