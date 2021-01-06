<?php

namespace App\Http\Controllers;

use App\Models\CommunityGarden;
use App\Models\CommunityGardenPhoto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommunityGardenPhoto;
use App\Http\Requests\UpdateCommunityGardenPhoto;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class CommunityGardenPhotoController extends Controller
{
    public function index()
    {
        $communitygardenphoto = CommunityGardenPhoto::latest()->get();
        return view('backend.communitygardenphoto.index',compact('communitygardenphoto'));
    }

    public function create()
    {
        return view('backend.communitygardenphoto.create');
    }

    public function store(StoreCommunityGardenPhoto $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|max:5000',
        ]);
        DB::transaction( function () use ($request)
        {
            $data = $request->data();

            $communitygardenphoto = CommunityGardenPhoto::create($data);

            $this->uploadRequestImage($request,$communitygardenphoto);
        });

        return redirect()->route('communitygardenphoto.index')->withsuccess(trans('Community Garden Photo  has been successfully created',[ 'etity' => 'communitygardenphoto']));
    }

    public function show(CommunityGardenPhoto $communitygardenphoto)
    {
        return view($communitygardenphoto->view,compact('communitygardenphoto'));
    }

    public function edit(CommunityGardenPhoto $communitygardenphoto)
    {
        return view('backend.communitygardenphoto.edit',compact('communitygardenphoto'));
    }

    public function update(UpdateCommunityGardenPhoto $request,CommunityGardenPhoto $communitygardenphoto)
    {
        DB::transaction(function () use($request,$communitygardenphoto)
        {
            $communitygardenphoto->update($request->data());

            $this->uploadRequestImage($request,$communitygardenphoto);
        });
        return redirect()->route('communitygardenphoto.index')->withsuccess(trans('community garden photo has been successfully updated',['entity'=>'communitygardenphoto']));
    }

    public function delete(CommunityGardenPhoto $communitygardenphoto)
    {
        $communitygardenphoto->delete();

        return back()->withsuccess(trans('community garden photo has been deleted successfully', ['entity'=>'communitygardenphoto']));
    }
}
