<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUserDashboard()
    {
        return view('user.dashboard');
    }

    public function getUserIndex()
    {
        return view('room.index');
    }

    public function getUserProfile()
    {
        return view('room.profile');
    }

    public function getResetPassword()
    {
        return view('room.password-reset');
    }

    public function postResetPassword()
    {
        //dump(dcrypt(auth()->user()->getAuthPassword()));
        //dd(request()->input('old_password'));

        $this->validate(request(), [
            'old_password' => 'required',
            'new_password' => 'required|string|min:1|confirmed',
        ]);

        $oldPass = request()->input('old_password');
        //dd(bcrypt($oldPass));
        if (!Hash::check($oldPass, auth()->user()->getAuthPassword())) {
            return back()->withErrors([
                'message' => 'Old password not matched'
            ]);
        }

        request()->user()->fill([
            'password' => Hash::make(request()->input('new_password'))
        ])->save();
        request()->session()->flash('success', 'Password changed successfully!');
        //return back();
        //return redirect()->route('user/password-reset');
        return back();
    }

    public function getUserOrderHistory()
    {
//        $columns = \DB::getSchemaBuilder()->getColumnListing('Product');
//        $columns = array_diff($columns, array('id', 'created_at', 'updated_at'));
        $orders = \Auth::user()->orders;
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.order-history', ['orders' => $orders]);
    }

    public function getUserOrderHistoryRoom()
    {
//        $columns = \DB::getSchemaBuilder()->getColumnListing('Product');
//        $columns = array_diff($columns, array('id', 'created_at', 'updated_at'));
        $orders = \Auth::user()->orders;
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        //dd($orders[0]->cart);
        return view('room.order-history-room', ['orders' => $orders]);
    }

    public function postUserProfile()
    {
        $this->validate(request(), [
            'first_name' => 'required|string|min:1',
            'last_name' => 'required|string|min:1',
            'email' => 'required|email'
        ]);

        request()->user()->fill([
            'last_name' => request()->input('last_name'),
            'first_name' => request()->input('first_name'),
            'email' => request()->input('email'),
        ])->save();
        request()->session()->flash('success', 'You profile changed successfully!');
        return back();
    }

    public function getUserSemesterRoom()
    {

//        $items = \DB::table('users')
//            ->join('user_subject_maps', 'users.id', '=', 'user_subject_maps.user_id')
//            ->join('subjects', 'subject_id', '=', 'subjects.id')
//            ->select('subjects.*', 'users.first_name')
//            ->get();
//        dd($items);
        $sems = null; $activeSem=null;
        $subs =null; $ActiveSub =null;
        $lessons=null; $activeLesson=null;
        $contents=null; $activeContent=null;
        $tests=null; $activeTest = null;

        $user = auth()->user();
        $sems = $user->userSemesterMaps()->get();
        if ($sems) {
            $activeSem = $user->activeSemester();
            //dd($activeSem);
            if ($activeSem) {
                //$subs = $user->userSubjectMaps()->get();
                $subs = \App\Subject::where('semester_id', '=', $activeSem->first()->semester->id)->get();
                if ($subs) {
                    $activeSub = $user->activeSubject();
                    if ($activeSub) {
                        //dd($activeSub->statusName->Name);
                        $lessons = \App\Lesson::where('subject_id', '=', $activeSub->first()->subject->id)->get();
                        if ($lessons) {
                            $activeLesson = $user->activeLesson();//dd($activeLesson);
                            if ($activeLesson) {
                                $contents = \App\Content::where('lesson_id', '=', $activeLesson->first()->lesson->id)->get();
//                                dd($contents);
                                $activeContent = $user->activeContent();
//                                dd($activeContent->statusName->Name);
                                $contentTypes = \App\ContentType::all();
//                                dd($contentType);
                                $tests = \App\Test::where('lesson_id', '=', $activeLesson->first()->Lesson->id);
                                if ($tests) {
                                    $activeTest = $user->activeTest();
                                    return view('room.semester-room',
                                        ['sems' => $sems, 'activeSem' => $activeSem,
                                            'subs' => $subs, 'activeSub' => $activeSub,
                                            'lessons' => $lessons, 'activeLesson' => $activeLesson,
                                            'tests' => $tests, 'activeTest' => $activeTest,
                                            'contents' => $contents, 'activeContent' => $activeContent,
                                            'contentTypes' => $contentTypes
                                        ]);
                                }
                            }
                        }
                    }
                }
            }
        }
        return view('room.semester-room',
            ['sems' => $sems, 'activeSem' => $activeSem,
                'subs' => $subs, 'activeSub' => $activeSub,
                'lessons' => $lessons, 'activeLesson' => $activeLesson,
                'test' => $tests, 'activeTest' => $activeTest
            ]);
    }

    public
    function getUserLessonRoom()
    {
        return view('room.lesson');
    }
}
