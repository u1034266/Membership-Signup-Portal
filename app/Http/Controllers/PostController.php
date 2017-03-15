<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    public function publicHomePage() {
        /* Hardcoding pagination to 10 records per page. This can be adjusted to user preference. */
        $posts = Post::paginate(10);

        return view('portal/home',['posts'=>$posts]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('membersPanel/home', ['posts'=>$posts]);
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
        $posts = new Post;
        $postFName = $request->firstname;
        if ( isset($request->middlename)) {
            $postMName = $request->middlename;
        } else {
            $postMName = NULL;
        }
        $posts->firstname = $request->firstname;
        $posts->middlename = $postMName;
        $posts->lastname = $request->lastname;
        $posts->gender = $request->gender;
        $posts->address_line1 = $request->address_line1;
        $posts->address_line2 = $request->address_line2;
        $posts->address_line3 = $request->address_line3;
        $posts->postcode = $request->postcode;
        $posts->ec_person = $request->ec_person;
        $posts->ec_relationship = $request->ec_relationship;
        $posts->ec_phone_number = $request->ec_phone_number;
        $posts->longterm_goal = $request->longterm_goal;

        $posts->save();

        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data = array(
            'id' => $post->id,
            'post' => $post

        );

        return view('membersPanel.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (isset($request->firstname)) {
            $post->firstname = $request->firstname;
        }
        if (isset($request->middlename)) {
            $post->middlename = $request->middlename;
        }
        if (isset($request->lastname)) {
            $post->lastname = $request->lastname;
        }
        if (isset($request->gender)) {
            $post->gender = $request->gender;
        }
        if (isset($request->address_line1)) {
            $post->address_line1 = $request->address_line1;
        }
        if (isset($request->address_line2)) {
            $post->address_line2 = $request->address_line2;
        }
        if (isset($request->address_line3)) {
            $post->address_line3 = $request->address_line3;
        }
        if (isset($request->postcode)) {
            $post->postcode = $request->postcode;
        }
        if (isset($request->ec_person)) {
            $post->ec_person = $request->ec_person;
        }
        if (isset($request->ec_relationship)) {
            $post->ec_relationship = $request->ec_relationship;
        }
        if (isset($request->ec_phone_number)) {
            $post->ec_phone_number = $request->ec_phone_number;
        }
        if (isset($request->longterm_goal)) {
            $post->longterm_goal = $request->longterm_goal;
        }

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $id = $post->id;

        $post->delete();

        return redirect()->route('posts.index');
    }
}
