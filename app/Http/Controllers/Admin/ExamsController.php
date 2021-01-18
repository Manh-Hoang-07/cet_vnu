<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exams;

class ExamsController extends Controller
{
    public function add_exam() {
    	return view('admin.notification.add-exam');
    }

    public function all_exams() {
        $exams = Exams::all();
        return view('admin.notification.all-exams')->with('exams',$exams);
    }

    public function edit_exam($id) {
        $exams = Exams::where('id',$id)->get();
        return view('admin.notification.edit-exam')->with('exams',$exams);
    }

    public function update_exam(Request $request,$id) {
        $exams = Exams::find($id);
        $exams->title = $request->title;
        $exams->time = $request->time;
        $exams->forms = $request->forms;
        $exams->content = $request->content;
        $exams->save();

        return redirect()->route('all.exams')->with('success','Sửa kỳ thi thành công');
    }

    public function save_exam(Request $request) {
    	if(!isset($request->id)) {
            $exam = new Exams();
            $exam->title = $request->title;
            $exam->time = $request->time;
            $exam->forms = $request->forms;
            $exam->content = $request->content;
            $exam->save();

            return redirect()->route('add.exam')->with('success','Thêm kỳ thi thành công');
        }
    }

    public function delete_exam($id) {
        $exam = Exams::find($id);
        $exam->delete();
        return redirect()->route('all.exams')->with('success','Xóa kỳ thi thành công');
    }
}
