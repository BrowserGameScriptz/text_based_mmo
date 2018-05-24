<?php
/* Smarty version 3.1.32-dev-31, created on 2018-01-16 16:59:03
  from "C:\xampp\htdocs\wt_proj\templates\topic_reply.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-31',
  'unifunc' => 'content_5a5e21475848d8_90945037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '067d0accd93187484ed098304f10432e142e9c2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wt_proj\\templates\\topic_reply.tpl',
      1 => 1516118342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e21475848d8_90945037 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="form-register" action="./functions/topic_reply.php" method="post"> 
                <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px">
                        <div class="form-group">
                          <label for="comment">Reply to the topic:</label>
                          <textarea class="form-control" rows="5" id="about" name="postText"></textarea>
                        </div>
                    </div>
                
                </div>
                
                <div class = "form-group">
                    <div class = "col-md-3" style="padding:0px;">       
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit Reply</button>
                    </div>
                    <div class = "col-md-9" style="padding:0px; padding-left:12px;">
                        As there is no WYSIWYG editor, you can use HTML format to style the code.
                    </div>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="uid" hidden/>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['topicID']->value;?>
" name="topicID" hidden/>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['boardID']->value;?>
" name="boardID" hidden/>
                </div>
</form><?php }
}
