<?php
/* Smarty version 3.1.32-dev-31, created on 2018-01-16 17:24:31
  from "C:\xampp\htdocs\wt_proj\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-31',
  'unifunc' => 'content_5a5e273f69a143_34602156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad67f7bf7c232bfccaf48b114ac6eec165e49089' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wt_proj\\templates\\index.tpl',
      1 => 1516119870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftnav.tpl' => 1,
  ),
),false)) {
function content_5a5e273f69a143_34602156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left"><?php echo $_smarty_tpl->tpl_vars['headerText']->value;?>
</h1></div>
      
    </div>
    <div class="row">
        <?php $_smarty_tpl->_subTemplateRender("file:leftnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="col-md-9">
            <h4 class="text-primary">News &amp; Updates</h4>
            <hr>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>  
                <?php if (isset($_smarty_tpl->tpl_vars['newsID']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['n']->value['id'] == $_smarty_tpl->tpl_vars['newsID']->value) {?>
                <div class = "bpcms_news_box">
                    <h4 class="text-info"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
<small> posted on <?php echo $_smarty_tpl->tpl_vars['n']->value['date'];?>
</small></h4>
                    <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['n']->value['content'];?>
</p>
                    
                </div>
                    <?php }?>
                <?php } else { ?>
                     <div class = "bpcms_news_box">
                    <h4 class="text-info"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
<small> posted on <?php echo $_smarty_tpl->tpl_vars['n']->value['date'];?>
</small></h4>
                    <p class="text-justify" id="smallNews"><?php echo $_smarty_tpl->tpl_vars['n']->value['content'];?>
</p>
                    <a href="?act=index&news=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
">&gt;&gt; See full post!</a>
                </div>
                <?php }?>
            <?php
}
} else {
?>

                <div class="col-md-12">
                <div class="alert alert-info" role="alert"><span class="text-primary"><strong>No news post found. :(</strong></span></div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
<?php }
}
