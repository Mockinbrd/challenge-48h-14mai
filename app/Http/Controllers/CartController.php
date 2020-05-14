<?php

namespace App\Http\Controllers;


use App\Product;
use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $duplicata = Cart::search(function ($cartItem, $rowId) use($request) {
            return $cartItem->id === $request->product_id;
        });

        if ($duplicata->isNotEmpty()){
            return redirect()->route('products.index')->with('success', $request->title.' a déjà été ajouté au panier.');
        }

        $product = Product::find($request->product_id);

        Cart::add($product->id, $product->title, 1, $product->price)
            ->associate('App\Product');
        return redirect()->route('products.index')->with('success', $product->title.' ajouté au panier.');
    }

    public function storeCoupon(Request $request){

        $code = $request->get('code');

        $coupon = Coupon::where('code', $code)->first();

        if(!$coupon){
            return redirect()->back()->with('error', 'Code invalide ou expiré.');
        }

        $request->session()->put('coupon', [
            'code' => $coupon->code,
            'remise' => $coupon->discount(Cart::subtotal())
        ]);

        return redirect()->back()->with('success', 'Code appliqué.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();

        $validator = Validator::make($request->all(), [
            'qty' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()){

            Session::flash('danger', 'La quantité du produit ne doit pas dépasser 6');
            return response()->json(['error' => 'Cart has not been updated.']);
        }

        if ($data['qty'] > $data['stock']) {
            Session::flash('danger', 'Pas assez de produits en stock, stock disponible : '.$data['stock'].' unités');
            return response()->json(['error' => 'Product quantity not available']);
        }

        Cart::update($rowId, $data['qty']);

        Session::flash('success', 'La quantité du produit est passée à '.$data['qty'].'.');

        return response()->json(['success' => 'Cart updated to '.$data['qty']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return back()->with('success', 'Produit retiré du panier.');
    }

    public function destroyCoupon() {
        request()->session()->forget('coupon');
        return redirect()->back()->with('succes', 'Le coupon a bien été supprimé.');
    }
}
