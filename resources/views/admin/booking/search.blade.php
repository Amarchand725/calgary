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