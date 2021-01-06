<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\UpdateDonationForm;
use Illuminate\Support\Facades\DB;
//use App\Models\Image;
use App\Models\DonationForm;
use App\Models\Supporters;
use App\Http\Requests\StoreDonationForm;

class DonationFormController extends Controller
{
    public function index()
    {
        $donationform = DonationForm::latest()->get();
        return view('backend.donationform.index',compact('donationform'));
    }

    public function create()
    {
        return view('backend.donationform.create');
    }

    public function store(StoreDonationForm $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|max:5000',
        ]);
        DB::transaction( function () use ($request)
        {
            $data = $request->data();

            $donationform = DonationForm::create($data);

            $this->uploadRequestImage($request,$donationform);
        });


        return redirect()->route('donationform.index')->withsuccess(trans('donationform image has been successfully created',[ 'etity' => 'donationform']));
    }

    public function show(DonationForm $donationform)
    {
        return view($donationform->view,compact('donationform'));
    }

    public function edit(DonationForm $donationform)
    {
        return view('backend.donationform.edit',compact('donationform'));
    }

    public function update(UpdateDonationForm $request,DonationForm $donationform)
    {
        DB::transaction(function () use($request,$donationform)
        {
            $donationform->update($request->data());

            $this->uploadRequestImage($request,$donationform);
        });
        return redirect()->route('donationform.index')->withsuccess(trans('donationform has been successfully updated',['entity'=>'donationform']));
    }

    public function delete(DonationForm $donationform)
    {
        $donationform->delete();

        return back()->withsuccess(trans('DonationForm as been deleted successfully', ['entity'=>'donationform']));
    }

}
