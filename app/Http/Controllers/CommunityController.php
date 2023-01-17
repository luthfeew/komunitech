<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\CommunityUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CommunityController extends Controller
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
        // if user is not logged in, redirect to login page
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('community.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // create community and attach in community_user table
        $community = Community::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '_'),
            'description' => $request->description,
            'logo' => 'https://picsum.photos/seed/picsum/80/80',
            'banner' => 'https://picsum.photos/seed/picsum//1280/360',
        ]);

        CommunityUser::create([
            'community_id' => $community->id,
            'user_id' => Auth::user()->id,
            'role' => 'owner',
        ]);

        return redirect()->route('community.show', $community->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function show(Community $community, $k_slug)
    {
        $community = Community::where('slug', $k_slug)->first();
        return view('community.show', [
            'item' => $community,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function edit(Community $community)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Community $community)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function destroy(Community $community)
    {
        //
    }
}
