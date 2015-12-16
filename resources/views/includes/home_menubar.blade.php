<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid margin-right-15">
        <div class="contaier">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">LIVE</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          @if (Auth::check())
          <ul class="nav navbar-nav">
                  <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration<b class="caret"></b></a>
                   <ul class="dropdown-menu">
                        <li><a href="#">About</a></li>
                        @can('sys_admin')
                          <li><a href="/admin/home">System Admin</a></li>
                        @endcan  
                        @can('oem_admin')
                          <li><a href="/oem">OEM</a></li>
                        @endcan          
                   </ul>
                  </li>                            
          </ul>
          @endif
          @if (Auth::check())
          <ul class="nav navbar-nav">
                  <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modules<b class="caret"></b></a>
                   <ul class="dropdown-menu">
                        <li><a href="#">About</a></li>
                        @can('oem_user')
                          <li><a href="/oem">OEM</a></li>
                        @endcan          
                   </ul>
                  </li>                            
          </ul>
          @endif
          @if (Auth::check())
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->email}}<b class="caret"></b></a>
             <ul class="dropdown-menu">                
                <li><a href="../auth/logout">Logout</a></li>                  
             </ul>
            </li>            
          </ul>
          @endif
        </div>
        </div>
    </div>
</div>