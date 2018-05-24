<?php
/* Smarty version 3.1.32-dev-31, created on 2018-01-16 15:52:31
  from "C:\xampp\htdocs\wt_proj\templates\topnav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-31',
  'unifunc' => 'content_5a5e11af611362_20315961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f954b87906ac6525c7ad7ca60eee71cbf5fd6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wt_proj\\templates\\topnav.tpl',
      1 => 1516110265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e11af611362_20315961 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="?act=index">BackpackCMS </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="?act=index">Home </a></li>
                    <li role="presentation"><a href="?act=forum">Community </a></li>
                    <li role="presentation">
                        <a href="#"> </a>
                    </li>
                </ul>
            </div>
        </div>
</nav>  
<?php if (isset($_smarty_tpl->tpl_vars['announcement']->value)) {?>
    <div class = "container" style="margin-top:20px;">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">
            <span style="font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['announcement']->value;?>
</span></div>
        </div>
    </div>
<?php }?>

<?php }
}
