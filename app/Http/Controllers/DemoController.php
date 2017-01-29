<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('democrud.index')
                        ->with('title', 'List of All Demos')
                        ->with('demos', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select = [ 'key1' => 'Value1' ,
                    'key2' => 'Value2'
                    ];
        return view('democrud.create')
                        ->with('title', 'Create Demo')
                        ->with('select', $select);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::all($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $active = [ 'active' => 'Active' ,
                    'inactive' => 'Inactive'
                    ];
        return view('democrud.edit')
                        ->with('title', 'Edit Demo')
                        ->with('demo', $user)
                        ->with('active', $active);
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
        try{
            // Demo::destroy($id);

            return redirect()->route('demo.index')->with('success','Demo Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('demo.index')->with('error','Something went wrong.Try Again.');
        }
    }
}
