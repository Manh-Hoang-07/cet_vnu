@extends('admin.dashboard')
@section('content')
<br>
<div class="table-agile-info">
    <div class="panel-heading">
      Sửa sự kiện
    </div>
    <br>
    @foreach($events as $event)
      <form action="/admin/update-event/{{$event->id}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Tiêu đề sự kiện</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="time" class="col-sm-2 col-form-label">Thời gian diễn ra</label>
            <div class="col-sm-10">
                <input  type=date class="form-control" id="time" name="time" value="{{$event->time}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Nội dung sự kiện</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="content" name="content" value="{{$event->content}}">
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
    @endforeach
    </div>
</div>
@endsection