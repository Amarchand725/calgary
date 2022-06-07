@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
	<section class="content-header">
		<div class="content-header-left">
			<h1>{{ $page_title }}</h1>
		</div>
		<div class="content-header-right">
			<a href="{{ route('booking_priority.index') }}" class="btn btn-primary btn-sm">View All</a>
		</div>
	</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('booking_priority.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="title" class="col-sm-2 control-label">Type <span style="color: red">*</span></label>
							<div class="col-sm-9">
								<select name="type" id="" class="form-control">
									<option value="uno">UNO</option>
									<option value="duo">DUO</option>
									<option value="trio">TRIO</option>
								</select>
								<span style="color: red">{{ $errors->first('type') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="title" class="col-sm-2 control-label">Title <span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" id="title" class="form-control" value="{{ old('title') }}" name="title" placeholder="Enter title">
								<span style="color: red">{{ $errors->first('title') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="currency_code" class="col-sm-2 control-label">Currency Code </label>
							<div class="col-sm-9">
								<input type="text" id="currency_code" class="form-control" value="{{ old('currency_code') }}" name="currency_code" placeholder="Enter currency_code">
								<span style="color: red">{{ $errors->first('currency_code') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="price" class="col-sm-2 control-label">Price </label>
							<div class="col-sm-9">
								<input type="text" id="price" class="form-control" value="{{ old('price') }}" name="price" placeholder="Enter price">
								<span style="color: red">{{ $errors->first('price') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="credits" class="col-sm-2 control-label">Credits </label>
							<div class="col-sm-9">
								<input type="number" id="credits" class="form-control" value="{{ old('credits') }}" name="credits" placeholder="Enter credits">
								<span style="color: red">{{ $errors->first('credits') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="color" class="col-sm-2 control-label">Color <span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="color" id="color" value="{{ old('color') }}" name="color" placeholder="Enter color">
								<span style="color: red">{{ $errors->first('color') }}</span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="description" style="height:80px;" placeholder="Enter description">{{ old('description') }}</textarea>
								<span style="color: red">{{ $errors->first('description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

<script>
	$(document).ready(function() {
		$("#regform").validate({
			rules: {
				title: "required",
			}
		});
	});
</script>
@endsection