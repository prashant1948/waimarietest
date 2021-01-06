<?php

namespace App\Http\Controllers;

use App\Models\CommunityGarden;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommunityGarden;
use App\Http\Requests\UpdateCommunityGarden;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class CommunityGardenController extends Controller
{
    public function index()
    {
        $communitygarden = CommunityGarden::latest()->get();
        return view('backend.communitygarden.index',compact('communitygarden'));
    }

    public function create()
    {
        return view('backend.communitygarden.create');
    }

    public function store(StoreCommunityGarden $request)
    {
        $communitygarden = CommunityGarden::create($request->data());

        return redirect()->route('communitygarden.index')->withsuccess(trans('CommunityGarden  has been successfully created',[ 'etity' => 'communitygarden']));
    }

    public function show(CommunityGarden $communitygarden)
    {
        return view($communitygarden->view,compact('communitygarden'));
    }

    public function edit(CommunityGarden $communitygarden)
    {
        return view('backend.communitygarden.edit',compact('communitygarden'));
    }

    public function update(UpdateCommunityGarden $request,CommunityGarden $communitygarden)
    {
        DB::transaction(function () use($request,$communitygarden)
        {
            $communitygarden->update($request->data());

//            $this->uploadRequestImage($request,$communitygarden);
        });
        return redirect()->route('communitygarden.index')->withsuccess(trans('community garden has been successfully updated',['entity'=>'communitygarden']));
    }

    public function delete(CommunityGarden $communitygarden)
    {
        $communitygarden->delete();

        return back()->withsuccess(trans('community garden has been deleted successfully', ['entity'=>'communitygarden']));
    }
}
