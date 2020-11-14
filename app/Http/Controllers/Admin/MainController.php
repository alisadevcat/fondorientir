<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Image;
use App\Models\PreProject;
use App\Models\Projects;


class MainController extends Controller
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
        $pages= Pages::where('id', $id)->get();
        $slider_images=Image::find('name')->where('module', 'slider')->all();
        $banner=Image::find(1)->where('module', 'banner')->get();

        return view('admin.main.show', compact('pages', 'slider_images', 'banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages= Pages::where('id', $id)->get();
        $images= Image::find(1)->where('page_id', '1')->get();
        return view('admin.editor', compact('pages', 'images'));
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
    public function changeIntro($arr){
        $result = [];
        foreach($arr as $in){
        array_push($result, substr($in, 0, 150) . '...');
        }
        return $result;
    }

}