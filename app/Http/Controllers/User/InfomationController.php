<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Events;
use App\Models\Exams;

class InfomationController extends Controller
{
    public function cetinfo() {
    	return view('user.infomation.cetinfo');
    }

    public function cetevent() {
        $events = Events::all();
    	return view('user.notification.cetevent')->with('events',$events);
    }

    public function cetexam() {
        $exams = Exams::all();
    	return view('user.notification.cetexam')->with('exams',$exams);
    }

    public function update_info() {
    	$user = Auth::user();
        $userinfo = UserInfo::find($user->id);
        if($userinfo) {
            return view('user.infomation.update-info')->with('user',$user)->with('userinfo',$userinfo);
        }
        $userinfo = new UserInfo();
        $userinfo->id = $user->id;
        $userinfo->save();
    	return view('user.infomation.update-info')->with('user',$user)->with('userinfo',$userinfo);
    }

    public function save_info(Request $request,$id) {
    	

        $user = array();
        $user1 = array();
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user1['id'] = $request->id;
        $user1['phone'] = $request->phone;
        $user1['birthday'] = $request->birthday;
        $user1['gender'] = $request->gender;
        $user1['picture'] = $request->picture;
        $user1['country'] = $request->country;

        if(UserInfo::find($id)) {
        	User::where('id',$id)->update($user);
        	UserInfo::where('id',$id)->update($user1);
    	}
    	else {
    		User::where('id',$id)->update($user);
        	UserInfo::insert($user1);
    	}
        return redirect()->route('updateInfo')->with('success', "Cập nhật thành công!");
    }

    public function event_detail($id) {
        $events = Events::where('id',$id)->get();
        return view('user.notification.event-detail')->with('events',$events);
    }
}
