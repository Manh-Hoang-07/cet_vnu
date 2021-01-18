@extends('admin.dashboard')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Tất cả kỳ thi
    </div>
    <br>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr style="background-color: #ccc">
            <th>Tiêu đề</th>
            <th>Thời gian</th>
            <th>Hình thức thi</th>
            <th>Lựa chọn</th>
          </tr>
        </thead>
        @foreach($exams as $exam)
        <tbody>
          <tr>
            <td>{{ $exam->title }}</td>
            <td>{{ $exam->time }}</td>
            <td>{{ $exam->forms }}</td>
            <td>
              <a href="/admin/edit-exam/{{$exam->id}}"><i class="fa fa-edit text-success text-active"></i> Sửa</a><br>
              <a href="/admin/delete-exam/{{$exam->id}}"><i class="fa fa-times text-danger text"></i> Xóa</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection