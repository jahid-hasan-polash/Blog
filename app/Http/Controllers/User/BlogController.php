<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Model\Blogs;
use App\Model\Catagory;
use App\Model\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Validator;

class BlogController extends Controller
{
    /**
     * Display index page and content list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagories = Catagory::all();
        $blogs = Blogs::orderBy('created_at','desc')->get();
        $recentBlogs = Blogs::orderBy('created_at','desc')->take(5)->get();
        return view('frontEnd.index')
                    ->with('blogs',$blogs)
                    ->with('catagories',$catagories)
                    ->with('recentPosts',$recentBlogs);
    }

    /**
     * Display Full blog article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catagories = Catagory::all();
        $recentBlogs = Blogs::orderBy('created_at','desc')->take(5)->get();
        $blog = Blogs::where('id',$id)->first();
        return view('frontEnd.fullBlog')
                    ->with('blog',$blog)
                    ->with('catagories',$catagories)
                    ->with('recentPosts',$recentBlogs);
    }

    /**
     * Display Blog info.
     * 
     * @return \Illuminate\Http\Response
     */
    public function info()
    {
        $about = "ajkbd asdlvdf vlajsdhf vhadsflkv azdflkvj adfnvlkjasd flvlhasdl ashdc  sagdcjhagbsdcfkasgc kashdgvk asjca skdc";
        return view('frontEnd.about')
                    ->with('about',$about);
    }

    /**
     * Display blogs By Catagory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blogByCatagory($id)
    {
        $blogs = Blogs::where('catagory_id',$id)->orderBy('created_at','desc')->get();
        $name = Catagory::where('id',$id)->first()->name;
        return view('frontEnd.blogsByCatagory')
                    ->with('blogs',$blogs)
                    ->with('catagoryName',$name);
    }

    /**
     * Display blog By writer.
     *
     * @param  $user_id
     * @return \Illuminate\Http\Response
     */
    public function blogByWriter($id)
    {
        $blogs = Blogs::where('user_id',$id)->orderBy('created_at','desc')->get();
        $name = User::where('id',$id)->first()->name;
        return view('frontEnd.blogsByWriter')
                    ->with('blogs',$blogs)
                    ->with('writerName',$name);
    }

}










