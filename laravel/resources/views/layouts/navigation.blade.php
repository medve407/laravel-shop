<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Shop</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/products') }}">Products</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
                    <li><a href="{{ url('/cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                @else
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="{{ url('/signup') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>