<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipDescription;
use Illuminate\Http\Request;
use App\Http\Requests\StoreScholarshipDescription;
use App\Http\Requests\UpdateScholarshipDescription;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class ScholarshipDescriptionController extends Controller
{
    public function index()
    {
        $scholarshipdescription = ScholarshipDescription::latest()->get();
        return view('backend.scholarshipdescription.index',compact('scholarshipdescription'));
    }

    public function create()
    {
        return view('backend.scholarshipdescription.create');
    }

    public function store(StoreScholarshipDescription $request)
    {
        $scholarshipdescription = ScholarshipDescription::create($request->data());

        return redirect()->route('scholarshipdescription.index')->withsuccess(trans('ScholarshipDescription  has been successfully created',[ 'etity' => 'scholarshipdescription']));
    }

    public function show(ScholarshipDescription $scholarshipdescription)
    {
        return view($scholarshipdescription->view,compact('scholarshipdescription'));
    }

    public function edit(ScholarshipDescription $scholarshipdescription)
    {
        return view('backend.scholarshipdescription.edit',compact('scholarshipdescription'));
    }

    public function update(UpdateScholarshipDescription $request,ScholarshipDescription $scholarshipdescription)
    {
        DB::transaction(function () use($request,$scholarshipdescription)
        {
            $scholarshipdescription->update($request->data());

//            $this->uploadRequestImage($request,$scholarshipdescription);
        });
        return redirect()->route('scholarshipdescription.index')->withsuccess(trans('scholarshipdescription has been successfully updated',['entity'=>'scholarshipdescription']));
    }

    public function delete(ScholarshipDescription $scholarshipdescription)
    {
        $scholarshipdescription->delete();

        return back()->withsuccess(trans('scholarshipdescription has been deleted successfully', ['entity'=>'scholarshipdescription']));
    }
}
