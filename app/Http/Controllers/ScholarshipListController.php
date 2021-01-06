<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipDescription;
use App\Models\ScholarshipList;
use Illuminate\Http\Request;
use App\Http\Requests\StoreScholarshipList;
use App\Http\Requests\UpdateScholarshipList;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class ScholarshipListController extends Controller
{
    public function index()
    {
        $scholarshiplist = ScholarshipList::latest()->get();
        return view('backend.scholarshiplist.index',compact('scholarshiplist'));
    }

    public function create()
    {
        $scholarshipdescriptions = ScholarshipDescription::pluck('title','title');
        return view('backend.scholarshiplist.create',compact('scholarshipdescriptions'));
    }

    public function store(StoreScholarshipList $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|max:5000',
        ]);
        DB::transaction( function () use ($request)
        {
            $data = $request->data();

            $scholarshiplist = ScholarshipList::create($data);

            $this->uploadRequestImage($request,$scholarshiplist);
        });

        return redirect()->route('scholarshiplist.index')->withsuccess(trans('ScholarshipList  has been successfully created',[ 'etity' => 'scholarshiplist']));
    }

    public function show(ScholarshipList $scholarshiplist)
    {
        return view($scholarshiplist->view,compact('scholarshiplist'));
    }

    public function edit(ScholarshipList $scholarshiplist)
    {
        return view('backend.scholarshiplist.edit',compact('scholarshiplist'));
    }

    public function update(UpdateScholarshipList $request,ScholarshipList $scholarshiplist)
    {
        DB::transaction(function () use($request,$scholarshiplist)
        {
            $scholarshiplist->update($request->data());

            $this->uploadRequestImage($request,$scholarshiplist);
        });
        return redirect()->route('scholarshiplist.index')->withsuccess(trans('scholarshiplist has been successfully updated',['entity'=>'scholarshiplist']));
    }

    public function delete(ScholarshipList $scholarshiplist)
    {
        $scholarshiplist->delete();

        return back()->withsuccess(trans('scholarshiplist has been deleted successfully', ['entity'=>'scholarshiplist']));
    }
}
