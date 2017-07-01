<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Cart;
use Session;
use Auth;

//use Stripe\Charge;
//use Stripe\Stripe;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $columns = \DB::getSchemaBuilder()->getColumnListing('Product');
        //array_shift($columns);
        $columns = array_diff($columns, array('id', 'created_at', 'updated_at'));
        //dd($products);
        //dd($columns->first());
        return view('index', compact('products', 'columns'));
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));

        return redirect()->home();
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shop-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        //dd($cart->items[1]['item']->name);
        //dd($cart->items[2]['price']);
        return view('shop.shop-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shop-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['products' => $cart->items, 'total' => $cart->totalPrice]);
    }

    public function postCheckout(Request $request){
        if (!Session::has('cart')) {
            return redirect()->route('/');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        //Stripe::setApiKey('a343kasdfsdfaw34343');
        try {
//                $charge = Charge::create(array(
//                    "amount" => $cart->totalPrice * 100;
//                    "currency" => "usd"
//                    "source" => $request->input('stripeToken'), //obtained wit hStripe.js
//                    "description" => "Test Charge"
//                ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            //$order->payment_id = $charge->id;
            //dd($request->input('name'));
            $order->payment_id = rad2deg(10);
            Auth::user()->orders()->save($order);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('home')->with('success', 'You successfully purchased the products');
    }
}