<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Vinkla\Hashids\Facades\Hashids;

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
    public function create($k_slug)
    {
        // get community id from slug
        $community = Community::where('slug', $k_slug)->first();

        return view('post.create', [
            'community' => $community,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $k_slug)
    {
        // get community id from slug
        $community = Community::where('slug', $k_slug)->first();

        // validate request
        $request->validate([
            'title' => 'required',
        ]);

        // create post
        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '_'),
            'body' => $request->body,
            'user_id' => Auth::id(),
            'community_id' => $community->id,
        ]);

        // redirect to community page
        return redirect()->route('community.show', ['k_slug' => $k_slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $k_slug, $id, $p_slug = null)
    {
        // decode post id using hashids
        $post_id = Hashids::decode($id)[0];
        $post = Post::find($post_id);
        return view('post.show', [
            'item' => $post,
            'hashid' => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
