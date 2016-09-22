<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
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
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate($request, array());
        $post = new Post;
        $post ->fname = $request->fname;
        $post ->lname = $request->lname;
        $post ->address = $request->address;
        $post ->address2 = $request->address2;
        $post ->city = $request->city;
        $post ->state = $request->state;
        $post ->zipcode = $request->zipcode;
        $post ->phone = $request->phone;
        $post ->email = $request->email;
        $post ->company_info = $request->company_info;
        $post ->company_name = $request->company_name;
        $post ->company_address = $request->company_address;
        $post ->company_city = $request->company_city;
        $post ->company_state = $request->company_state;
        $post ->company_zipcode = $request->company_zipcode;
        $post ->company_phone = $request->company_phone;
        $post ->pdf_file = $request->pdf_file;

        $post->save();

        return redirect()->route('posts/show', $post->id);

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
