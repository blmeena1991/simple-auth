<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Demo App</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">
                <?if(!$this->Session->read('Auth.User')){?>
                    <li><a href="/users/add">Sign Up</a></li>
                    <li><a href="/users/login">Sign In</a></li>
                <?}else{?>
                    <li><a href="/users/logout">Logout</a></li>
                <?}?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>