<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Order;
use App\Cart;
use Session;
use Auth;

//use Stripe\Charge;
//use Stripe\Stripe;

class CourseController extends Controller
{

    public function getFeatures()
    {
        return view('features');
    }
    public function index()
    {
        $userCourses = collect();
//        $userCourses->push(1);
//        dd($userCourses);
        $user = auth()->user();
        if (isset($user)){

            foreach($user->orders as $order){
                foreach($order->orderDetail as $od)
                    $userCourses->push($od->course_id);
            }
//            dd($user->orders()->first()->orderDetail);
        }
        //dd($userCourses->contains(2));

//        if (!Session::has('cart')) {
//            return view('shop.shop-cart', ['courses' => null]);
//        }
//        $oldCart = Session::get('cart');
//        $cart = new \App\Cart($oldCart);
//        $item = $cart->find(3);
//        dd($item);

        $courses = Course::all();
        $columns = \DB::getSchemaBuilder()->getColumnListing('courses');
        //array_shift($columns);
        $columns = array_diff($columns, array('id', 'created_at', 'updated_at'));
        //dd($products);
        //dd($columns->first());
        return view('index', compact('courses', 'columns', 'userCourses'));
    }
}