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
                            case "wrong":
                                $msg = "This combination of email and password do not belong to any existing account!";
                                break;
                        }
            
                        echo '<div class="col-md-12" style="padding:0px;">
                            <div class="alert alert-warning" role="alert"><span class=""><strong>Warning: </strong>'.$msg.'</span></div>
                        </div>';
                    }
                   
                {/php}
                
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
