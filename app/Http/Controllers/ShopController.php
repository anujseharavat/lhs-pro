<?php

namespace App\Http\Controllers;

use \App;
use Session;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function test()
    {
        $show = true;
        return view('test')->with("show", $show);
    }

    public function course()
    {
        $show = true;
        return view('room.course')->with("show", $show);
    }

    public function getAddToCart(Request $request)
    {
        //dd($request['aj']);
        $course = App\Course::find($request['course_id']);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new \App\Cart($oldCart);
        $cart->add($course, $course->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));

        return Session::get('cart')->totalQty;
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shop-cart', ['courses' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new App\Cart($oldCart);
        //dd($cart->items[1]['item']->name);
        //dd($cart->items[2]['price']);
        return view('shop.shop-cart', ['courses' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shop-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new App\Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['courses' => $cart->items, 'total' => $cart->totalPrice]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('/');
        }
        $oldCart = Session::get('cart');
        $cart = new App\Cart($oldCart);
        //Stripe::setApiKey('a343kasdfsdfaw34343');
        try {
//                $charge = Charge::create(array(
//                    "amount" => $cart->totalPrice * 100;
//                    "currency" => "usd"
//                    "source" => $request->input('stripeToken'), //obtained wit hStripe.js
//                    "description" => "Test Charge"
//                ));

            $order = new App\Order();
            $order->cart = serialize($cart);
            //$order->address = $request->input('address');
            //$order->payment_id = $charge->id;
            //dd($request->input('name'));
            $order->payment_id = rad2deg(10);
            $order->payment_status = "successful";
            //Save Order
            \Auth::user()->orders()->save($order);

            //dd($cart->items);
            //dump($cart->items);
            //Save OrderDetails
            foreach ($cart->items as $item) {
                //dd($item['item']->class_name);
                $course = $item['item'];
                $orderDetail = new App\OrderDetail();
                $orderDetail->course_id = $course['id'];
                $orderDetail->price = $course['price'];
                $orderDetail->qty = $item['qty'];
                //Save OrderDetails
                $order->orderDetail()->save($orderDetail);
                //dd();
                //dump('End Semesters---------');
                //dd(auth()->user()->UserSemesterMap);
            }
            $order->order_details_id = $orderDetail->id;
            //Save Order
            \Auth::user()->orders()->save($order);
            //dd('End Cart Items');
        } catch
        (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        Session::put('shop-success', 'You successfully purchased the course(s)');
        return redirect()->route('home')->with('shop-success', 'You successfully purchased the course(s)');
    }

    public function getShopSubjectSelect()
    {
        //$subjects = DB::table('Subjects')->where('semester_id','=','1')->select('id', 'name')->get();
        return view('shop.subject-select');
    }
    public function getRemoveFromCart($id)
    {
        //Session::forget('cart');
        //dd('postRemove');
//        if (!Session::has('cart')) {
//            return back();
//        }
        $cart = Session::get('cart');
        Session::forget('cart');
        //dump($cart);
        //array_forget($cart->items, $id);
        $cart->remove($id);
        //dd($cart);
        if (count($cart->items) > 0)
            session()->put('cart', $cart);
        //$cart = $cart->items->remove($id);
        //$oldCart->forget($item->id);
        //session()->put('cart', array_diff(session()->get('cart'), [$id]));
        //session()->forget('cart.Cart.items.'.$id);
        //dump($id);
        //dump($cart);
        //dd($items);
        return back();
        //return view('shop.shop-cart', ['courses' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function OrderDataPost($postData){ // This is the function which I want to call from ajax
        //do something awesome with that post data
        return "I am in";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
