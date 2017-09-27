@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/company_infos') }}">Company Info</a> :
@endsection
@section("contentheader_description", $company_info->$view_col)
@section("section", "Company Infos")
@section("section_url", url(config('laraadmin.adminRoute') . '/company_infos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Company Infos Edit : ".$company_info->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($company_info, ['route' => [config('laraadmin.adminRoute') . '.company_infos.update', $company_info->id ], 'method'=>'PUT', 'id' => 'company_info-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'intro')
					@la_input($module, 'address1')
					@la_input($module, 'address2')
					@la_input($module, 'email1')
					@la_input($module, 'email2')
					@la_input($module, 'contact1')
					@la_input($module, 'contact2')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/company_infos') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#company_info-edit-form").validate({
		
	});
});
</script>
@endpush
