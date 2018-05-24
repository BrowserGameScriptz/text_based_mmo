<?php
/* Smarty version 3.1.32-dev-31, created on 2018-01-16 17:29:35
  from "C:\xampp\htdocs\wt_proj\templates\forum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-31',
  'unifunc' => 'content_5a5e286f4cba14_88780279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c4a30bcee94f2b371665e125234e125fb537f5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wt_proj\\templates\\forum.tpl',
      1 => 1516120082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:topic_reply.tpl' => 1,
  ),
),false)) {
function content_5a5e286f4cba14_88780279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left"><?php echo $_smarty_tpl->tpl_vars['headerText']->value;?>
</h1></div>
      
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-primary">BackpackCMS Community Forum</h4>
            <hr>
            <div class = "row" style="margin-left:20px">
            <?php if (isset($_smarty_tpl->tpl_vars['topicID']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forumTopics']->value, 'fT');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fT']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['fT']->value['id'] == $_smarty_tpl->tpl_vars['topicID']->value) {?>
                        <div class="row">
                                   <h4 class="text-primary"><?php echo $_smarty_tpl->tpl_vars['fT']->value['title'];?>
 forum board</h4>
                        </div>
                        <!--- Forum Post design --->
                        <div class = "row">
                            <div class = "col-md-3">
                                 <span class="text-info">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['fT']->value['topic_creator'] == $_smarty_tpl->tpl_vars['u']->value['id']) {?> 
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 3) {?>
                                                <span style="color:red;">
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 2) {?>
                                                    <span style="color:green;">
                                                    <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                    </span>
                                            <?php }?>
                                     
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 1) {?>
                                                <span style="color:yellow;">
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                     
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 0) {?>
                                                <span>
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </span>
                            </div>
                            <div class="col-md-9">
                                    <?php echo nl2br($_smarty_tpl->tpl_vars['fT']->value['topic_text']);?>

                            </div>
                        </div>
                        <!--- Forum Post design end--->
                    <?php }?> 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forumPosts']->value, 'fP');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fP']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['fP']->value['belongs_to'] == $_smarty_tpl->tpl_vars['topicID']->value) {?>
                        <!--- Forum Post design --->
                        <div class = "row " id="<?php echo $_smarty_tpl->tpl_vars['fP']->value['id'];?>
" style="margin-top:20px">
                            <hr>
                            <div class = "col-md-3">
                                 <span class="text-info">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['fP']->value['post_maker'] == $_smarty_tpl->tpl_vars['u']->value['id']) {?> 
                                             <?php if ($_smarty_tpl->tpl_vars['fT']->value['topic_creator'] == $_smarty_tpl->tpl_vars['u']->value['id']) {?> 
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 3) {?>
                                                <span style="color:red;">
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 2) {?>
                                                <span style="color:green;">
                                                 <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                     
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 1) {?>
                                                <span style="color:yellow;">
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                     
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 0) {?>
                                                <span>
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                        <?php }?>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    <br> posted on <?php echo $_smarty_tpl->tpl_vars['fP']->value['date'];?>

                                </span>
                            </div>
                            <div class="col-md-9">
                                    <?php echo nl2br($_smarty_tpl->tpl_vars['fP']->value['post_text']);?>

                            </div>
                        </div>
                        <!--- Forum Post design end--->
                    <?php }?> 
                    
                       
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
       
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
   
                    <?php if (isset($_smarty_tpl->tpl_vars['uid']->value)) {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:topic_reply.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php }?>
            <?php } else { ?>
                <?php if (isset($_smarty_tpl->tpl_vars['boardID']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forumBoards']->value, 'fB');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fB']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['fB']->value['id'] == $_smarty_tpl->tpl_vars['boardID']->value) {?>
                                        <div class="row">
                                            <h4 class="text-primary"><?php echo $_smarty_tpl->tpl_vars['fB']->value['name'];?>
 forum board
                                            <small class="pull-right">
                                            
                                             <?php if (isset($_smarty_tpl->tpl_vars['uid']->value)) {?>
                                                  <a href="?act=topic_create&board=<?php echo $_smarty_tpl->tpl_vars['boardID']->value;?>
">CREATE TOPIC</a>
                                            <?php }?>
                                            </small>
                                            
                                            </h4>
                                            
                                            
                                        </div>
                                    <?php }?> 
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forumTopics']->value, 'fT');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fT']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['fT']->value['belongs_to'] == $_smarty_tpl->tpl_vars['boardID']->value) {?>
                                    <div class="row" style="margin-left:20px;margin-top:20px;">
                                            <span class="text-info"><a href="?act=forum&board=<?php echo $_smarty_tpl->tpl_vars['boardID']->value;?>
&topic=<?php echo $_smarty_tpl->tpl_vars['fT']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fT']->value['title'];?>
</a>, posted on <?php echo $_smarty_tpl->tpl_vars['fT']->value['date'];?>
</span>
                                            <br>
                                            <span class="text-info">by 
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['fT']->value['topic_creator'] == $_smarty_tpl->tpl_vars['u']->value['id']) {?> 
                                                    <?php if ($_smarty_tpl->tpl_vars['fT']->value['topic_creator'] == $_smarty_tpl->tpl_vars['u']->value['id']) {?> 
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 3) {?>
                                                <span style="color:red;">
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 2) {?>
                                                    <span style="color:green;">
                                                    <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                    </span>
                                            <?php }?>
                                     
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 1) {?>
                                                <span style="color:yellow;">
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                     
                                            <?php if ($_smarty_tpl->tpl_vars['u']->value['admin'] == 0) {?>
                                                <span>
                                                <?php echo $_smarty_tpl->tpl_vars['u']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['last_name'];?>

                                                </span>
                                            <?php }?>
                                        <?php }?>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                                            </span>
                                            <br>

                                    </div>
                    
                               <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forumCats']->value, 'fC');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fC']->value) {
?>  
                            <div class = "bpcms_news_box">
                                <h4 class="text-info"><?php echo $_smarty_tpl->tpl_vars['fC']->value['name'];?>
</h4>
                                <?php if (isset($_smarty_tpl->tpl_vars['forumBoards']->value)) {?> 
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forumBoards']->value, 'fB');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fB']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['fB']->value['cat'] == $_smarty_tpl->tpl_vars['fC']->value['id']) {?>
                                            <div class="row" style="margin-left:40px">
                                                <span class="text-info"><a href="?act=forum&board=<?php echo $_smarty_tpl->tpl_vars['fB']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fB']->value['name'];?>
</a></span>
                                                <br>
                                                <?php echo $_smarty_tpl->tpl_vars['fB']->value['description'];?>

                                            </div>
                                        <?php }?>                      
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                <?php }?>
                            </div>              
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <?php }?>
            <?php }?>
        </div>

        </div>
    </div>
<?php }
}
