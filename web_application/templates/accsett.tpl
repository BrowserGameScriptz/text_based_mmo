{config_load file="test.conf" section="setup"}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left">{$headerText}</h1></div>
      
    </div>
    <div class="row">
        {include file="leftnav.tpl"}
        <div class="col-md-9">
            
             {php}
                    if(ISSET($_GET['err'])){
                        $err = $_GET['err'];
                        switch ($err) {
                            case "pwd":
                                $msg = "The passwords you used as input are not the same!";
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
            
            <h4 class="text-primary">Modify your account details</h4>
            <hr>
            <form class="form-register" action="./functions/accsett.php" method="post">
               <div class="form-group">
                    <div class="col-md-6" style="padding-left:0px; padding-bottom:0px;">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-control" placeholder="{$firstName}" name="firstName" >
                    </div>
                     
                    <div class="col-md-6" style="padding-right:0px; padding-bottom:0px;">
                          <label for="lastName">Last Name</label>
                          <input type="text" id="lastName" class="form-control" placeholder="{$lastName}" name = "lastName" >
                    </div>
                </div>
                
                <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px;">
                        <label for="email">Email:</label>
                        <input type = "text" class="form-control" value="{$email}" disabled>
                    </div>
                </div>
                
                <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px;">
                        <label for="email">Password:</label>
                        <input type = "password" class="form-control" value="" id="passwordChange"
                        name = "passwordChange"
                        placeholder="******">
                    </div>
                </div>
                
                 <div class = "form-group">
                     <div class = "col-md-12" style="padding:0px;">
                        <label for="email">Repeat Password:</label>
                        <input type = "password" class="form-control" value="" id="passwordChangeRepeat" 
                        name = "passwordChangeRepeat" placeholder="******">
                    </div>
                </div>
                
                <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px">
                        <div class="form-group">
                          <label for="comment">User bio:</label>
                          <textarea class="form-control" rows="5" id="about" name="userAbout"></textarea>
                        </div>
                    </div>
                
                </div>
                
                <div class = "form-group">
                    <div class = "col-md-3" style="padding:0px;">       
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit Changes</button>
                    </div>
                    <div class = "col-md-9" style="padding:0px; padding-left:12px;">
                        Settings left unchanged will have no effect. 
                        <br>
                        <b>Changing the password requires you to fill both of the password fields.</b>
                    </div>

                    </div>
            </form>
        </div>
        
    </div>
