
<nav class="navbar navbar-inverse menu">
    <div class="container-fluid margin-right-15">
        <div class="contaier">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin/home">Wander Blog User Management</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="/admin/users">Users</a></li>
                        <li><a href="/admin/roles">Roles</a></li>
                        <li><a href="/admin/permissions">Permissions</a></li>
                    </ul>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a style="cursor: pointer;" class="dropdown-toggle" data-toggle="dropdown">
                        Welcome @if(Auth::check()), {{ Auth::user()->name}} @endif<b class="caret space-left"></b></a>
                        <ul class="dropdown-menu">
                            @if (Auth::check())
                            @can('admin')
                            <li><a href="/admin/users">User Management</a></li>    
                            @endcan
                            <li><a href="/profile">My Profile</a> </li>
                            <li><a href="/auth/logout">Logout</a></li>
                            <li><a href="/">Back To Main Site</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
