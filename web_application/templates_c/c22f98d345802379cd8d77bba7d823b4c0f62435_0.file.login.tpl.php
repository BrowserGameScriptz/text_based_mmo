<?php
/* Smarty version 3.1.32-dev-31, created on 2018-01-16 16:44:44
  from "C:\xampp\htdocs\wt_proj\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-31',
  'unifunc' => 'content_5a5e1dec5a77a3_25973006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c22f98d345802379cd8d77bba7d823b4c0f62435' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wt_proj\\templates\\login.tpl',
      1 => 1512567501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e1dec5a77a3_25973006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left"><?php echo $_smarty_tpl->tpl_vars['headerText']->value;?>
</h1></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
              <?php 
                    if(ISSET($_GET['err'])){
                        $err = $_GET['err'];
                        switch ($err) {
                            case "wrong":
                                $msg = "This combination of email and password do not belong to any existing account!";
                                break;
                        }
            
                        echo '<div class="col-md-12" style="padding:0px;">
                            <div class="alert alert-warning" role="alert"><span class=""><strong>Warning: </strong>'.$msg.'</span></div>
                        </div>';
                    }
                   
                ?>
                
            <form class="form-signin" action="./functions/login.php" method="post">
                <h2 class="form-signin-heading">Please sign in</h2>
                
                <div class="form-group">
                    <label for="loginEmail">Email address</label>
                    <input type="email" id="loginEmail" class="form-control" placeholder="name@example.com" required="" autofocus="" name="loginEmail">
               </div>
                
                
                <div class="form-group">
                    <label for="loginPassword" >Password</label>
                    <input type="password" id="loginPassword" class="form-control" placeholder="******" required="" name="loginPassword">              
                </div>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
       <div class="col-md-3"></div>
    </div>
<?php }
}
