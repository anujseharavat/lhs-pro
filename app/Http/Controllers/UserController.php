<?php

namespace App\Http\Controllers;

use \App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function courseActivate(Request $request)
    {
        $courseId = $request['course_id'];
        $semesters = App\Course::find($courseId)->semesters;
//        //return $semesters->first();
        $first = 1;
        $status = 0;
//        return $courseId;
        foreach ($semesters as $semester) {
            if ($first) $status = 1;

            \DB::table('user_semester_maps')->insert([
                ['user_id' => auth()->user()->id,
                    'semester_id' => $semester->id,
                    'status' => $status
                ]
            ]);
            //$val++;
            $subjects = App\Subject::where('semester_id', '=', $semester->id)->get();
            //dd($subjects);
            foreach ($subjects as $subject) {
                \DB::table('user_subject_maps')->insert([
                    'user_id' => auth()->user()->id,
                    'subject_id' => $subject->id,
                    'status' => $status
                ]);

                $lessons = App\Lesson::where('subject_id', '=', $subject->id)->get();
                foreach ($lessons as $lesson) {
                    \DB::table('user_lesson_maps')->insert([
                        'user_id' => auth()->user()->id,
                        'lesson_id' => $lesson->id,
                        'status' => $status
                    ]);

                    $contents = App\Content::where('lesson_id', '=', $lesson->id)->get();
                    foreach ($contents as $content) {
                        \DB::table('user_content_maps')->insert([
                            'user_id' => auth()->user()->id,
                            'content_id' => $content->id,
                            'status' => $status
                        ]);
                        $first = 0;
                        $status = 0;
                    }
                    $tests = App\Test::where('lesson_id', '=', $lesson->id)->get();
                    foreach ($tests as $test) {
                        \DB::table('user_test_maps')->insert(
                            ['user_id' => auth()->user()->id,
                                'test_id' => $test->id,
                                'status' => $status
                            ]);
                    }
//                    $first=0;
//                    $status = 0;
                }
            }
            //$first=0;
            //dump('End Subjects---------');
        }
        $orderDetailId = $request['order_detail_id'];
        $orderDetail = App\OrderDetail::find($orderDetailId);
        $orderDetail->status = 1;
        $orderDetail->save();
        return $orderDetail->status;
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

    public function getUserSemesterRoom($id=1)
    {

//        $items = \DB::table('users')
//            ->join('user_subject_maps', 'users.id', '=', 'user_subject_maps.user_id')
//            ->join('subjects', 'subject_id', '=', 'subjects.id')
//            ->select('subjects.*', 'users.first_name')
//            ->get();
//        dd($id);
        $sems = null;
        $activeSem = null;
        $subs = null;
        $ActiveSub = null;
        $lessons = null;
        $activeLesson = null;
        $contents = null;
        $activeContent = null;
        $tests = null;
        $activeTest = null;

        $user = auth()->user();
        $sems = $user->userSemesterMaps()->get();
        $activeSem = null;
        $activeSub = null;
        $activeLesson = null;
        if ($sems) {
            $activeSem = $user->activeSemester();
            //dd($activeSem);
            if ($activeSem) {
                $subs = $user->userSubjectMaps()->get();
                //select subject only for given semester
                foreach($subs as $sub){
                    if ($sub->subject->semester_id <> $id) {
                        $subs->forget($sub->subject_id-1);
                    }
                }
//                dd($subs);
               if ($subs) {
                    $activeSub = $user->activeSubject();
                    if ($activeSub) {
                        $lessons = $user->userLessonMaps()->get();
                        return view('room.semester-room',
                            ['sems' => $sems, 'activeSem' => $activeSem,
                                'subs' => $subs, 'id' => $id, 'lessons' => $lessons
                            ]);
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

    public function getProgressSummary()
    {
        /*$data = DB::table('user_semester_maps as usm')
            ->join('user_subject_maps as ussm', 'usm.user_id', '=', 'ussm.user_id')
            ->join('user_lesson_maps as ulm', 'ulm.user_id', '=', 'ussm.user_id')
            ->join('user_content_maps as ucm', 'ucm.user_id', '=', 'ulm.user_id')
            ->join('subjects as s', 's.id', '=', 'ussm.subject_id')
            ->join('semesters as se', 'se.id', '=', 's.semester_id')
            ->where('usm.user_id', '=', 2);

        dd($data->get());*/

        $select_data = [
          'sm.name AS sem_name',
          's.name AS sub_name',
          'l.name AS les_name',
          'ucm.status AS status',
        ];

        $data = DB::table('user_content_maps as ucm')
            ->join('contents as c', 'c.id', '=', 'ucm.content_id')
            ->join('lessons as l', 'c.lesson_id', '=', 'l.id')
            ->join('subjects as s', 's.id', 'l.subject_id')
            ->join('semesters as sm', 'sm.id', 's.semester_id')
            //->where('ucm.user_id','==',1)
            ->select($select_data)
            ->where('ucm.user_id','=',auth()->user()->id)
            ->get();
            //->where('user_id','=',auth()->user()->id);
        $data_new = null;
        if($data){
            $this->objToArray($data, $data_new);
        }

        return view('room.progress-summary',['progress_data' => $data_new]);
    }

    function objToArray($obj, &$arr){

        if(!is_object($obj) && !is_array($obj)){
            $arr = $obj;
            return $arr;
        }

        foreach ($obj as $key => $value)
        {
            if (!empty($value))
            {
                $arr[$key] = array();
                $this->objToArray($value, $arr[$key]);
            }
            else
            {
                $arr[$key] = $value;
            }
        }
        return $arr;
    }

    public function getUserLesson($id)
    {
        $lesson = \App\Lesson::find($id);
//        dd($lesson->id);
//        dump($lesson->id);
//        dump($lesson->subject);
//        dd($lesson->subject->semester);
        $contents = \App\Content::where('lesson_id', '=', $lesson->id)->get();
//        dump($contents);
//        $contentTypes = \App\ContentType::all();
        $user = auth()->user();
        $userContents = $user->userContentMaps();

        //$tests = $userContents->where('lesson_id', '=', $activeLesson->first()->Lesson->id);
//        dd($userContents);
//        dd($userContents->first()->statusName->name);
        //dd($userContents->first()->content->contentType->name);
        //dd($userContents->first()->content->type);
//        dump($id);
//        dd($userContents->first()->content->lesson_id);
        return view('room.lesson-room',
            ['lesson' => $lesson,
//                        'contentTypes' => $contentTypes,
                'userContents' => $userContents
            ]);
    }

    public function postUserContentStatus(Request $request)
    {
        $contentId = $request['content_id'];
        $user = auth()->user();

        $userContent1 = App\UserContentMap::where(['content_id' => $contentId, 'user_id' => $user->id]);
        $status = $userContent1->update(['status' => 2]);
        $userContent1 = $userContent1->first();

        if ($status) {
            //get max id to update status of net content id
            $maxContentId = $user->userContentMaps()->max('content_id');

            if ($contentId < $maxContentId) {
                $userContent2 = App\UserContentMap::where(['content_id' => $contentId + 1, 'user_id' => $user->id]);
                $status = $userContent2->update(['status' => 1]);
                $userContent2 = $userContent2->first();

                //if all content of 1 lesson changed then set the lesson1 & lesson2 status
                if ($userContent1->content->lesson_id != $userContent2->content->lesson_id) {
                    //set lesson1 status to 2 as completed
                    $userLesson1 = App\UserLessonMap::where(['lesson_id' => $userContent1->content->lesson_id, 'user_id' => $user->id]);
                    $status = $userLesson1->update(['status' => 2]);
                    $userLesson1 = $userLesson1->first();

                    //set lesson2 status to 1 as in progress
                    $maxLessonId = $user->userLessonMaps()->max('lesson_id');
                    if ($userContent2->content->lesson_id <= $maxLessonId) {
                        $userLesson2 = App\UserLessonMap::where(['lesson_id' => $userContent2->content->lesson_id, 'user_id' => $user->id]);
                        $status = $userLesson2->update(['status' => 1]);
                        $userLesson2 = $userLesson2->first();

                        //if all lessons subject 1 completed then set the subject1 to 2 & subject2 to 1 status
                        if ($userLesson1->lesson->subject_id != $userLesson2->lesson->subject_id ){
                            $userSubject1 = App\UserSubjectMap::where(['subject_id' => $userLesson1->lesson->subject_id, 'user_id' => $user->id]);
                            $status = $userSubject1->update(['status' => 2]);
                            $userSubject1 = $userSubject1->first();

                            $maxSubjectId = $user->userSubjectMaps()->max('subject_id');
                            if ($userLesson2->lesson->subject_id <= $maxSubjectId){
                                $userSubject2 = App\UserSubjectMap::where(['subject_id' => $userLesson2->lesson->subject_id, 'user_id' => $user->id]);
                                $status = $userSubject2->update(['status' => 1]);
                                $userSubject2 = $userSubject2->first();

                                //if subject1 and subject2's semester id is different then set semester1 status to 2 and semester2 status to 1
                                if ($userSubject1->subject->semester_id != $userSubject2->subject->semester_id ) {
                                    $userSemester1 = App\UserSemesterMap::where(['semester_id' => $userSubject1->subject->semester_id, 'user_id' => $user->id]);
                                    $status = $userSemester1->update(['status' => 2]);
                                    $userSemester1 = $userSemester1->first();

                                    $maxSemesterId = $user->userSemesterMaps()->max('semester_id');
                                    if ($userSubject2->subject->semester_id <= $maxSemesterId){

                                        $userSemester2 = App\UserSemesterMap::where(['semester_id' => $userSubject2->subject->semester_id, 'user_id' => $user->id]);
                                        $status = $userSemester2->update(['status' => 1]);
                                    }
                                }
                            }
                        }
                    }
                }
            }else{
                $maxlessonId = $user->userLessonMaps()->max('lesson_id');
                $userLesson2 = App\UserLessonMap::where(['lesson_id' => $maxlessonId, 'user_id' => $user->id]);
                $status = $userLesson2->update(['status' => 2]);

                $maxSubjectId = $user->userSubjectMaps()->max('subject_id');
                $userSubject2 = App\UserSubjectMap::where(['subject_id' => $maxSubjectId, 'user_id' => $user->id]);
                $status = $userSubject2->update(['status' => 2]);

                $maxSemesterId = $user->userSemesterMaps()->max('semester_id');
                $userSemester2 = App\UserSemesterMap::where(['semester_id' => $maxSemesterId, 'user_id' => $user->id]);
                $status = $userSemester2->update(['status' => 2]);
            }
        }
        return $status;
    }

    public function postUserContentStatus2(Request $request)
    {
        $contentId = $request['content_id'];
        $user = auth()->user();

        $userContent1 = App\UserContentMap::where(['content_id' => $contentId, 'user_id' => $user->id]);
        $status = $userContent1->update(['status' => 2]);
        $userContent1 = $userContent1->first();

        if ($status) {
            //get max id to update status of net content id
            $maxContentId = $user->userContentMaps()->max('content_id');

            if ($contentId < $maxContentId) {
                $userContent2 = App\UserContentMap::where(['content_id' => $contentId + 1, 'user_id' => $user->id]);
                $status = $userContent2->update(['status' => 1]);
                $userContent2 = $userContent2->first();

                //if all content of 1 lesson changed then set the lesson1 & lesson2 status
                if ($userContent1->content->lesson_id != $userContent2->content->lesson_id) {
                    //set lesson1 status to 2 as completed
                    $userLesson1 = App\UserLessonMap::where(['lesson_id' => $userContent1->content->lesson_id, 'user_id' => $user->id]);
                    $status = $userLesson1->update(['status' => 2]);
                    $userLesson1 = $userLesson1->first();

                    //set lesson2 status to 1 as in progress
                    $maxLessonId = $user->userLessonMaps()->max('lesson_id');
                    if ($userContent2->content->lesson_id <= $maxLessonId) {
                        $userLesson2 = App\UserLessonMap::where(['lesson_id' => $userContent2->content->lesson_id, 'user_id' => $user->id]);
                        $status = $userLesson2->update(['status' => 1]);
                        $userLesson2 = $userLesson2->first();

                        //if all lessons subject 1 completed then set the subject1 to 2 & subject2 to 1 status
                        if ($userLesson1->lesson->subject_id != $userLesson2->lesson->subject_id ){
                            $userSubject1 = App\UserSubjectMap::where(['subject_id' => $userLesson1->lesson->subject_id, 'user_id' => $user->id]);
                            $status = $userSubject1->update(['status' => 2]);
                            $userSubject1 = $userSubject1->first();

                            $maxSubjectId = $user->userSubjectMaps()->max('subject_id');
                            if ($userLesson2->lesson->subject_id <= $maxSubjectId){
                                $userSubject2 = App\UserSubjectMap::where(['subject_id' => $userLesson2->lesson->subject_id, 'user_id' => $user->id]);
                                $status = $userSubject2->update(['status' => 1]);
                                $userSubject2 = $userSubject2->first();

                                //if subject1 and subject2's semester id is different then set semester1 status to 2 and semester2 status to 1
                                if ($userSubject1->subject->semester_id != $userSubject2->subject->semester_id ) {
                                    $userSemester1 = App\UserSemesterMap::where(['semester_id' => $userSubject1->subject->semester_id, 'user_id' => $user->id]);
                                    $status = $userSemester1->update(['status' => 2]);
                                    $userSemester1 = $userSemester1->first();

                                    $maxSemesterId = $user->userSemesterMaps()->max('semester_id');
                                    if ($userSubject2->subject->semester_id <= $maxSemesterId){

                                        $userSemester2 = App\UserSemesterMap::where(['semester_id' => $userSubject2->subject->semester_id, 'user_id' => $user->id]);
                                        $status = $userSemester2->update(['status' => 1]);
                                    }
                                }
                            }
                        }
                    }
                }
            }else{
                $maxlessonId = $user->userLessonMaps()->max('lesson_id');
                $userLesson2 = App\UserLessonMap::where(['lesson_id' => $maxlessonId, 'user_id' => $user->id]);
                $status = $userLesson2->update(['status' => 2]);

                $maxSubjectId = $user->userSubjectMaps()->max('subject_id');
                $userSubject2 = App\UserSubjectMap::where(['subject_id' => $maxSubjectId, 'user_id' => $user->id]);
                $status = $userSubject2->update(['status' => 2]);

                $maxSemesterId = $user->userSemesterMaps()->max('semester_id');
                $userSemester2 = App\UserSemesterMap::where(['semester_id' => $maxSemesterId, 'user_id' => $user->id]);
                $status = $userSemester2->update(['status' => 2]);
            }
        }
        return back();
//        return redirect()->route('lesson-room',['lesson' => $lesson, 'userContent'=>$userContents]);
    }

    public function getUserContent($id)
    {
        $user = auth()->user();
        $userContents = $user->userContentMaps();

        $userContent = $userContents->where('content_id', '=', $id)->first();
        //dd($userContent->first()->statusName->name);
        //$content = \App\Content::find($id);

        return view('room.content-room',
            [
                'content' => $userContent
            ]);
    }
}
