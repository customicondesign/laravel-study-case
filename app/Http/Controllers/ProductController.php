<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Show the application dashboards.
     * @param
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('product')->get();

        return view('product', compact('products'));
    }

    /**
     * Show the application dashboards.
     * @param
     *
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        DB::table("product")->delete($id);
        return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);
    }
}
