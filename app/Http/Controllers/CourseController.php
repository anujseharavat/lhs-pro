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

    public function index()
    {
        //$user = auth()->user();
        //dd($user->orders);
        $courses = Course::all();
        $columns = \DB::getSchemaBuilder()->getColumnListing('courses');
        //array_shift($columns);
        $columns = array_diff($columns, array('id', 'created_at', 'updated_at'));
        //dd($products);
        //dd($columns->first());
        return view('index', compact('courses', 'columns'));
    }
}