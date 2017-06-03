@layout('Admin/Dashboard/layout')

@section('style')
<link rel="stylesheet" href="{{ base_url('assets/css/dataTables.material.min.css') }}">
@endsection

@section('content')
<content-apps>
	<h4>Posts</h4>
	
	<table id="data-posts" class="mdl-data-table mdl-shadow--2dp" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</tfoot>
	</table>

</content-apps>
@endsection

@section('javascript')
<script src="{{ base_url('assets/js/dataTables.min.js') }}"></script>
<script src="{{ base_url('assets/js/dataTables.material.min.js') }}"></script>
<script>
	$(document).ready(function() {
	$('#data-posts').DataTable( {
		columnDefs: [
			{
				targets: [ 0, 1, 2 ],
				className: 'mdl-data-table__cell--non-numeric'
			}
		],
		"deferRender": true
	} );
} );
</script>
@endsection