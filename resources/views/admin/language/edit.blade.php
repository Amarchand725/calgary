@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
	<section class="content-header">
		<div class="content-header-left">
			<h1>{{ $page_title }}</h1>
		</div>
		<div class="content-header-right">
			<a href="{{ route('language.index') }}" class="btn btn-primary btn-sm">View All</a>
		</div>
	</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('language.update', $language->slug) }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				{{ method_field('PATCH') }}
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Language <span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="{{ $language->title }}" name="title" placeholder="Enter language">
								<span style="color: red">{{ $errors->first('title') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Code <span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="{{ $language->code }}" name="code" placeholder="Enter language code">
								<span style="color: red">{{ $errors->first('code') }}</span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="description" style="height:80px;" placeholder="Enter description">{{ $language->description }}</textarea>
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