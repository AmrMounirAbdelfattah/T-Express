<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddProduct;
class AddProductController extends Controller
{
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
        return view('Admin.Add_Product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'productname'           =>  'required',
            'productprice'          =>  'required',
            'productimage'          =>  'required',
            'productdescription'    =>  'required',
        ]);
        $addProduct = new AddProduct([
            'market_selection'       =>  $request->get('marketSelect'),
            'Categorie_selection'    =>  $request->get('categorieSelect'),
            'SubCategorie_selection' =>  $request->get('SubCategorieSelect'),
            'Product_name'           =>  $request->get('productname'),
            'Product_price'          =>  $request->get('productprice'),
            'Product_image'          =>  $request->get('productimage'),
            'Product_description'    =>  $request->get('productdescription')
            ]);
        $addProduct->save();
        return redirect()->route('Admin.Add_Product')->with('success', 'Data Added'); 
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
    public function update(Request $request, $id)
    {
        //
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
