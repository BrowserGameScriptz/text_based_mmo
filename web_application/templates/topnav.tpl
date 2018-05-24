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
{if isset($announcement)}
    <div class = "container" style="margin-top:20px;">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">
            <span style="font-size:20px;">{$announcement}</span></div>
        </div>
    </div>
{/if}

