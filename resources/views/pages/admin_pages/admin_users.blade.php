@extends('pages.admin_page')
@section('content_admin')
<div class="row">
    <div class="col-md-4">
      <h4>Users</h4>
    	<table class="table">
      <tbody>     
  	   @foreach($users as $u)
  	   	<tr>
          <td>{{$u->id}}.</td>
  	   		<td><b class="user" id="{{$u->id}}">{{$u->email}}</b></td>
  	   	</tr>
  	   @endforeach	  
  	</tbody>
  	</table>
     <hr>
     {!! $users->render() !!}
   </div>
   <div class="col-md-8">
      <h4>Roles</h4>
      <div id="user_roles">

      </div>
   </div>
</div>s
<script type="text/javascript">
$(document).ready(function(){
 $(".user").click(function(){
      var id = this.id;
      $.post('/users/roles', {id: id}, function(markup)
      {          
          $('#user_roles').html(markup);       
      });
  });
 });
</script>
@endsection