@extends('admin.dashboard')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Tất cả sự kiện
    </div>
    <br>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr style="background-color: #ccc">
            <th>Tiêu đề</th>
            <th>Thời gian</th>
            <th>Lựa chọn</th>
          </tr>
        </thead>
        @foreach($events as $event)
        <tbody>
          <tr>
            <td>{{ $event->title }}</td>
            <td>{{ $event->time }}</td>
            <td>
              <a href="/admin/edit-event/{{$event->id}}"><i class="fa fa-edit text-success text-active"></i> Sửa</a><br>
              <a href="/admin/delete-event/{{$event->id}}"><i class="fa fa-times text-danger text"></i> Xóa</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection