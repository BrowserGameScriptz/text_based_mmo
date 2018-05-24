  <div class="col-md-3">
                {if !isset($uid)}
                    <h4 class="text-primary">Hello, visitor!</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="?act=register">Register</a> </li>
                       
                        <li><a href="?act=login">Login</a></li>
                        
                    </ul>
                    <div class="blankspace"></div>
                {/if}
                
      
                {if isset($uid)}
                    <h4 class="text-primary">Welcome, {$firstName} {$lastName}!</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Profile</li>
                        <li><a href="?act=accsett">User Settings</a></li>
                        <li><a href="?act=logout">Logout </a></li>
                    </ul>           
                {/if}
                  
</div>