<ul class="nav nav-sidebar">	 	
	<li class="{{Route::getCurrentRoute()->getPath() == 'admin/users' ? 'active':''}}"><a href="/admin/users">Users</a></li>
	<li class="{{Route::getCurrentRoute()->getPath() == 'admin/roles' ? 'active':''}}"><a href="/admin/roles">Roles</a></li>
	<li class="{{Route::getCurrentRoute()->getPath() == 'admin/permissions' ? 'active':''}}"><a href="/admin/permissions">Permissions</a></li>
</ul>