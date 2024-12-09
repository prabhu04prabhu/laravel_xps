<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\productmaster;
use Auth;
use Hash;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
      //  $product = Product::find($id);
      $id = $request->input('productid');
      $rate = $request->input('rate');
      $scrabamount = $request->input('scrabamount');
      $defaultdiscount = $request->input('defaultdiscount');
      $quantity = $request->input('quantity');
      $originalrate = $request->input('originalrate');
    
      $product = DB::table('productmaster')->where('ProductID', '=', $id)->get();
        if(!$product) {
            abort(404);
        }
        foreach($product as $value){
            $Productname = $value->ProductModelNo;
            $photo = $value->image;
        }
        $cart = session()->get('cart');
        if(!$cart) {

        $cart = [
            $id => [
                "name" => $Productname,
                "quantity" => $quantity,
                "productid" => $id,
                "originalrate"=>$originalrate,
                "price"=>$rate,
                "scrabamount" => $scrabamount,
                "discount"=>$defaultdiscount,
                "photo" => $photo
            ]
        ];
        session()->put('cart', $cart);
       // $htmlCart = view('header')->render();
      //  return response()->json(['msg' => 'Product added to cart successfully!', 'data' => $htmlCart]);
        return response()->json(['total' => count($cart), 'msg' => 'Product added to cart successfully!', 'data' => $cart]);
    }
    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
        //$htmlCart = view('header')->render();
       // return response()->json(['msg' => 'Product added to cart successfully!', 'data' => $htmlCart]);
    }
    $cart[$id] = [
        "name" => $Productname,
                "quantity" => $quantity,
                "productid" => $id,
                "originalrate"=>$originalrate,
                "price"=>$rate,
                "scrabamount" => $scrabamount,
                "discount"=>$defaultdiscount,
                "photo" => $photo
    ];
    session()->put('cart', $cart);
   // $htmlCart = view('header')->render();
    return response()->json(['msg' => 'Product added to cart successfully!', 'data' => $cart, 'total' => count($cart)]);
}

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            $subTotal = $cart[$request->id]['quantity'] * $cart[$request->id]['price'];

            $total = $this->getCartTotal();

         //   $htmlCart = view('header')->render();

            return response()->json(['msg' => 'Cart updated successfully', 'data' => $cart, 'total' => $total, 'subTotal' => $subTotal]);

            //session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            $total = $this->getCartTotal();

         //  $htmlCart = view('header')->render();

            return response()->json(['msg' => 'Product removed successfully', 'data' => $cart, 'total' => $total]);

            //session()->flash('success', 'Product removed successfully');
        }
    }


    /**
     * getCartTotal
     *
     *
     * @return float|int
     */
    private function getCartTotal()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        return number_format($total, 2);
    }
}
