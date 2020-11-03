@extends('layouts.admin')
@section('content')
		  
		  <div class="banner">
		   
				<h2>
				<a href={{url('/admin')}}>Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>

		    <section class="content">
		    	<div class="container-fluid">
		    		<p>
		    			<a href="{{route('admin.create')}}" class="btn btn-primary">Add New User</a></p>
						<div>
						@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

						</div>
						
		    		<table id="datatable1" class="table table-borderedtable-stripped">
		    			
		    			<thead>
		    				<tr>
		    					<th>id</th>
		    					<th>name</th>
                                <th>role</th>
		    					<th style="text-align:center;">Action</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				@foreach($users as $u)
		    				<tr>
		    					<td>{{ $u->id }}</td>
		    					<td>{{ $u->name }}</td>
                                <td>{{ $u->role }}</td>
									<td style="text-align:center;">
										<a href="{{ route('admin.edit' , $u->id ) }}" class="btn btn-info">Edit</a>
										<a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" 
										class="btn btn-danger">Delete</a>
										<form action="{{ route('admin.destroy' , $u->id) }}" method="POST">
										@method('DELETE')
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
										</form>
									<td>
									</tr>

							
		    				@endforeach
		    			</tbody>
		    		</table>
		    
		    		<div class="float-right"> 
		    		{{ $users->links() }}
		    	</div>
		    	</div>
		    	
		    </section>
@endsection
@section('scripts')
<script>
	
$(document).ready(function() {
    $('#datatable1').DataTable();
});

</script>
@endsection