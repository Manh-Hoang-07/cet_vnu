@extends('admin.dashboard')
@section('content')
<br>
<div class="table-agile-info">
    <div class="panel-heading">
      Thêm sự kiện
    </div>
    <br>
      <form action="/admin/save-event" method="post">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Tiêu đề sự kiện</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>

        <div class="form-group row">
            <label for="time" class="col-sm-2 col-form-label">Thời gian diễn ra</label>
            <div class="col-sm-10">
                <input  type=date class="form-control" id="time" name="time">
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Nội dung sự kiện</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="content" name="content">
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
    </div>
</div>
@endsection