<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return all services in chunks
        $images = [];
        $data = [];
        $category = Category::all();
        $services = Service::all();
            foreach ($services as $service){
                $images = [];
                $image = Storage::get('public/'.$service->picture);
                array_push($images,$image);
            }
            $data = $services;
        return view('services.index',[
            'services'=>$data,
            'images'=>$images,
            'category'=>$category,
            'top_service'=>$data,
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('services.create');
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
        $data = $request->except('photo','facebook','twitter','instagram','whatsapp','category_id');
        $user_id = $request->user()->id;
        $service = Service::query()->create($data);
        $category_name = Category::query()->find((int)$request->category_id);
        $category_name = $category_name->name;
        $img = $request->photo;
        $name = $request->user()->id . date( 'h:m:s').'.jpg';
        $path= $img->storeAs('service_image',$name);
        $social_media = [];
        $social_media['facebook']= $request->facebook;
        $social_media['twitter']= $request->twitter;
        $social_media['instagram']= $request->instagram;
        $social_media['whatsapp']= $request->whatsapp;
        $social_media = json_encode($social_media);

        $data['social_media'] = $social_media;
        $data['picture'] = $path;
        $data['user_id'] = $user_id;
        $data['category_id'] = (int)$request->category_id;
        $data['type'] = $category_name;
        $service->update($data);
        return view('services.create')->with('Service Successfully created')->with('status','Service Created');
//        dd('Data going into database',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
