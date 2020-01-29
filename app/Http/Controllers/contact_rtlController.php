<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class contact_rtlController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        return view('rtl.T-Express_ContactUs_RTL');
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
            'name'     =>  'required',
            'email'    =>  'required',
            'image'    =>  'required',
            'subject'  =>  'required',
            'message'  =>  'required'
        ]);
        $contact = new Contact([
            'contact_name'     =>  $request->get('name'),
            'contact_email'    =>  $request->get('email'),
            'contact_image'    =>  $request->get('image'),
            'contact_subject'  =>  $request->get('subject'),
            'contact_message'  =>  $request->get('message')
        ]);
        $contact->save();
        return redirect()->route('rtl.T-Express_ContactUs_RTL')->with('success', 'Data Added');
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
