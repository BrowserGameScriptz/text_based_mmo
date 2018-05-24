<?php
/* Smarty version 3.1.32-dev-31, created on 2018-01-16 17:10:08
  from "C:\xampp\htdocs\wt_proj\templates\topic_create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-31',
  'unifunc' => 'content_5a5e23e0951393_63000309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2ef20860a2ce79eaf6f240f6b683103cbe3279' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wt_proj\\templates\\topic_create.tpl',
      1 => 1516119003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e23e0951393_63000309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left"><?php echo $_smarty_tpl->tpl_vars['headerText']->value;?>
</h1></div>
      
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-primary">Create a new forum topic</h4>
            <hr>
            
            <form class="form-register" action="./functions/topic_create.php" method="post"> 
                 <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px">
                        <div class="form-group">
                          <label for="comment">Topic title:</label>
                          <input class="form-control" id="about" name="topicTitle"/>
                        </div>
                    </div>
                
                </div>
                
                <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px">
                        <div class="form-group">
                          <label for="comment">Topic text:</label>
                          <textarea class="form-control" rows="5" id="about" name="topicText"></textarea>
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
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['boardID']->value;?>
" name="boardID" hidden/>
                </div>
            </form>
        </div>
    </div>
<?php }
}
