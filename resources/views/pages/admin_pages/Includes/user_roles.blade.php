<table class="table">
    <tbody>     
	   @foreach($user_roles as $r)
	   	<tr>
        	<td>{{$r->id}}</td>
	   		<td>{{$r->name}}</td>
	   		<td>{{$r->label}}</td>
        <td>users with this role</td>
        <td>permissions assined to this role</td>
	   	</tr>
	   @endforeach	  
	</tbody>
</table>