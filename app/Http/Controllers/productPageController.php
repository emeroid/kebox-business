<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\product;
use App\faq;
use App\state;
use App\order;

class productPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landingPage(product $product)
    {
        //dd($product);
        //$product = product::with('product_images')->findOrFail($slug);
        $faq = faq::get();
        $states = state::get();
        return view('front.product', compact('product','faq','states'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function homePage()
    {
        $product = product::find(1);
        return view('front.coming_soon',compact('product'));
    }


    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function editorPage()
    {
        //$product = product::with('home_image')->get();
        return view('front.editor');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        //validate request before proceesing
        $this->validate($request,  [
                'full_name' => 'required',
                'email' => 'email|',
                'mobile' => 'required',
                'address' => "required",
                'state_id'=> 'required',
                'product_id'=> 'required',
                'qty'=>'required',
      ]);

     $order = new order;
     $order->tracking_id = rand(1000,10000);
     $order->user_id = 1;
     $order->full_name = $request->full_name;
     $order->mobile = $request->mobile;
     $order->other_mobile = $request->other_mobile;
     $order->email = $request->email;
     $order->address = $request->address;
     $order->product_id = $request->product_id;
     $order->state_id = $request->state_id;
     $order->qty = $request->qty;
     $order->save();

     return view('front.thank_you');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        //return view('front.thank_you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
