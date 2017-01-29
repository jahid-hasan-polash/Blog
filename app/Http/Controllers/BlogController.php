<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Blogs;
use App\Model\Catagory;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blogs::where('user_id',Auth::user()->id)->get();
        return view('blog.index')
                ->with('blogs',$blogs)
                ->with('title','Your Blogs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagories = Catagory::lists('name','id');
        return view('blog.create')
                ->with('catagories',$catagories)
                ->with('title','New Article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $rules =[
            'title'                  => 'required',
            'description'                 => 'required',
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        } else {

            $blog = new Blogs;
            $blog->user_id = $user->id;
            $blog->title = $data['title'];
            $blog->description = $data['description'];
            $blog->catagory_id = $data['catagory'];

            if($blog->save()){
                return redirect('dashboard')
                        ->with('success','ceated successfully');
            } else {
                return redirect()->back()
                        ->with('error','Something went wrong.Please Try again.');
            }
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blogs::where('id',$id)->first();
        return view('blog.show')
                    ->with('blog',$blog)
                    ->with('title',' ');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catagories = Catagory::lists('name','id');
        $blog = Blogs::where('id',$id)->first();
        return view('blog.edit')
                    ->with('blog',$blog)
                    ->with('catagories',$catagories)
                    ->with('title','Edit');
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
        $rules =[
            'title'                  => 'required',
            'description'                 => 'required',
        ];

        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        } else {

            $blog = Blogs::where('id',$id)->first();

            $blog->title = $data['title'];
            $blog->description = $data['description'];
            $blog->catagory_id = $data['catagory'];

            if($blog->save()){
                return redirect()->route('blog.index')
                    ->with('success','Updated successfully');
            } else {
                return redirect()->back()
                        ->with('error','Something went wrong.Please Try again.');
            }
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Blogs::destroy($id);
            return redirect()->route('dashboard')->with('success','Blog Deleted Successfully');
        } catch(Exception $ex) {
            return redirect()->route('notice.index')->with('error','Something went wrong');
        }
    }
}
