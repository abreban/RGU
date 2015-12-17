
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
                <a class="navbar-brand">Wander Blog</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            @if (Auth::check())
                <ul class="nav navbar-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="/home">Home</a> </li>
                        <li><a href="/adventures">Adventures</a></li>
                        <li><a href="/adventures/create">Add Adventure</a></li>
                        <li><a href="/authors">Authors</a></li>
                        <li class="dropdown">
                            <a style="cursor: pointer;" class="dropdown-toggle" data-toggle="dropdown">Administration<span class="caret space-left"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Dashboard</a></li>
                                <li><a href="">User Management</a></li>
                                <li><a href="">Role Management</a></li>
                            </ul>
                        </li>
                    </ul>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a style="cursor: pointer;" class="dropdown-toggle" data-toggle="dropdown">Welcome, {{Auth::user()->name}}<b class="caret space-left"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/profile">My Profile</a> </li>
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav">
                    <li><a href="/home">Home</a> </li>
                    <li><a href="/adventures">Adventures</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" style="cursor: pointer;" data-toggle="dropdown">User<span class="caret space-left"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url("auth/login") }}">Login</a></li>
                            <li><a href="{{ url("auth/register") }}">Register</a></li>
                        </ul>
                    </li>
                </ul>
            @endif

          {{--@if (Auth::check())--}}
              {{--<ul class="nav navbar-nav">--}}
                      {{--<li class="dropdown">--}}
                       {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Modules<b class="caret"></b></a>--}}
                       {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">About</a></li>--}}
                            {{--@can('oem_user')--}}
                              {{--<li><a href="/oem">OEM</a></li>--}}
                            {{--@endcan--}}
                       {{--</ul>--}}
                      {{--</li>--}}
              {{--</ul>--}}
          {{--@endif--}}

            </div>
        </div>
    </div>
</nav>


{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration<b class="caret"></b></a>--}}
{{--<ul class="dropdown-menu">--}}
    {{--<li><a href="#">About</a></li>--}}
    {{--@can('sys_admin')--}}
    {{--<li><a href="/admin/home">System Admin</a></li>--}}
    {{--@endcan--}}
    {{--@can('oem_admin')--}}
    {{--<li><a href="/oem">OEM</a></li>--}}
    {{--@endcan--}}
{{--</ul>--}}
