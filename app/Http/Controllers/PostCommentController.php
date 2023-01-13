<?php

namespace App\Http\Controllers;

use App\Models\PostComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;

class PostCommentController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if (Auth::check()) {
            // get user id
            $user_id = Auth::user()->id;
            // get post id
            $post_id = Hashids::decode($id)[0];
            // save comment
            PostComment::create([
                'body' => $request->body,
                'post_id' => $post_id,
                'user_id' => $user_id,
                'parent_id' => $request->parent_id,
            ]);
            // redirect to previous page with success message
            return redirect()->back()->with('success', 'Comment added successfully');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function show(PostComment $postComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function edit(PostComment $postComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostComment $postComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostComment $postComment)
    {
        //
    }

    public function reply(Request $request, $post_id, $comment_id)
    {
        if (Auth::check()) {
            // get user id
            $user_id = Auth::user()->id;
            // save comment
            PostComment::create([
                'body' => $request->body,
                'post_id' => $post_id,
                'user_id' => $user_id,
                'parent_id' => $comment_id,
            ]);
            // redirect to previous page with success message
            return redirect()->back()->with('success', 'Comment added successfully');
        } else {
            return redirect()->route('login');
        }
    }
}
