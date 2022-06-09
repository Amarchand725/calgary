@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('booking.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>{{ $page_title }}</h1>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			@if (session('status'))
				<div class="callout callout-success">
					{{ session('status') }}
				</div>
			@endif

			<div class="box box-info">
				<div class="box-body">
                    <div class="row">
                        <div class="col-sm-1">Search:</div>
                        <div class="d-flex col-sm-6">
                            <input type="text" id="search" class="form-control" placeholder="Search">
                        </div>
                        <div class="d-flex col-sm-5">
                            <select name="" id="status" class="form-control status" style="margin-bottom:5px">
                                <option value="All" selected>Search by status</option>
                                <option value="0">Pending</option>
                                <option value="1">Confirmed</option>
                                <option value="2">Completed</option>
                                <option value="3">Rejected</option>
                            </select>
                        </div>
                    </div>
					<table id="" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th>Service</th>
								<th>Name</th>
								<th>Email</th>
								<th>Description</th>
								<th>Status</th>
								<th>Created at</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($models as $key=>$model)
								<tr id="id-{{ $model->slug }}">
									<td>{{ $models->firstItem()+$key }}.</td>
									<td>{{ $model->hasService->name??'--' }}</td>
									<td>{{ $model->name??'--' }}</td>
									<td>{{ $model->email }}</td>
									<td>{!! \Illuminate\Support\Str::limit($model->description,60)??'--' !!}</td>
									<td>
										@if($model->status==0)
											<span class="badge badge-warning">Pending</span>
										@elseif($model->status==1)
											<span class="badge badge-info">Confirmed</span>
										@elseif($model->status==2)
											<span class="badge badge-success">Completed</span>
										@elseif($model->status==3)
											<span class="badge badge-danger">Rejected</span>
										@endif
									</td>
									<td>{{ date('d, F-Y H:i:s A', strtotime($model->created_at)) }}</td>
									<td width="250px">
										@can('booking-delete')
                                            <button class="btn btn-danger btn-xs delete" data-slug="{{ $model->id }}" data-del-url="{{ route('booking.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
										@endcan
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="9">
									Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
                                    <div class="d-flex justify-content-center">
                                        {!! $models->links('pagination::bootstrap-4') !!}
                                    </div>
                                </td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('js')
@endpush
