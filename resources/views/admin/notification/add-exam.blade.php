@extends('admin.dashboard')
@section('content')
<br>
<div class="table-agile-info">
    <div class="panel-heading">
      Thêm kỳ thi
    </div>
    <br>
      <form action="/admin/save-exam" method="post">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Tiêu đề kỳ thi</label>
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
            <label for="forms" class="col-sm-2 col-form-label">Hình thức thi</label>
            <div class="col-sm-10">
                <select id="forms" name="forms" class="form-control">
                    <option value="Tự luận">Tự luận</option>
                    <option value="Trắc nghiệm">Trắc nghiệm</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Nội dung kỳ thi</label>
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