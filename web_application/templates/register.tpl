{config_load file="test.conf" section="setup"}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left">{$headerText}</h1></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
            {php}
                    if(ISSET($_GET['err'])){
                        $err = $_GET['err'];
                        switch ($err) {
                            case "exist_acc":
                                $msg = "The email you have provided is already bound to an existing account!";
                                break;
                            case "diff_pwd":
                                $msg = "The two passwords do not match. Verify that they are the same!";
                                break;
                        }
            
                        echo '<div class="col-md-12" style="padding:0px;">
                            <div class="alert alert-warning" role="alert"><span class=""><strong>Warning: </strong>'.$msg.'</span></div>
                        </div>';
                    }
                
            
            
                    if(ISSET($_GET['reg'])){
                        echo '<div class="col-md-12" style="padding:0px;">
                            <div class="alert alert-success" role="alert"><span class=""><strong>Hurray!</strong> The account has been successfully created!</span></div>
                        </div>';
                     }
                {/php}
            
            <form class="form-register" action="./functions/register.php" method="post">
                
                
                <h2 class="form-signin-heading">Account Registration</h2>
                
                 <div class="form-group">
                    <div class="col-md-6" style="padding-left:0px; padding-bottom:12px;">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-control" placeholder="First Name" name="firstName" required="">
                    </div>
                     
                    <div class="col-md-6" style="padding-right:0px; padding-bottom:12px;">
                          <label for="lastName">Last Name</label>
                          <input type="text" id="lastName" class="form-control" placeholder="Last Name" name = "lastName" required="">
                    </div>
                </div>
                
               
                <div class="form-group" style="margin-top:5px;">
                    <label for="registerEmail">Email address</label>
                    <input type="email" id="registerEmail" class="form-control" placeholder="name@example.com" name="registerEmail" required="" autofocus="">
                </div>
                
                
                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" id="registerPassword" class="form-control" placeholder="******" name = "registerPassword" required="">
                </div>
                
                 <div class="form-group">
                    <label for="registerPasswordRepeat">Password, again</label>
                    <input type="password" id="registerPasswordRepeat" class="form-control" placeholder="******" name="registerPasswordRepeat" required="">
                </div>
                
                 
                
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            </form>
        </div>
       <div class="col-md-3"></div>
    </div>
