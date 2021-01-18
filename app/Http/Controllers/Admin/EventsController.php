<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{
    public function add_event() {
    	return view('admin.notification.add-event');
    }

    public function all_events() {
        $events = Events::all();
        return view('admin.notification.all-events')->with('events',$events);
    }

    public function edit_event($id) {
        $events = Events::where('id',$id)->get();
        return view('admin.notification.edit-event')->with('events',$events);
    }

    public function update_event(Request $request,$id) {
        $events = Events::find($id);
        $events->title = $request->title;
        $events->time = $request->time;
        $events->content = $request->content;
        $events->save();

        return redirect()->route('all.events')->with('success','Sửa sự kiện thành công');
    }

    public function save_event(Request $request) {
    	if(!isset($request->id)) {
            $event = new Events();
            $event->title = $request->title;
            $event->time = $request->time;
            $event->content = $request->content;
            $event->save();

            return redirect()->route('add.event')->with('success','Thêm sự kiện thành công');
        }
    }

    public function delete_event($id) {
        $event = Events::find($id);
        $event->delete();
        return redirect()->route('all.events')->with('success','Xóa sự kiện thành công');
    }
    
}
