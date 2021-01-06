<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDonation;
use App\Http\Requests\UpdateDonation;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::latest()->get();
        return view('backend.donation.index',compact('donations'));
    }

    public function create()
    {
        return view('backend.donation.create');
    }

    public function store(StoreDonation $request)
    {
        $donation = Donation::create($request->data());

        return redirect()->route('donation.index')->withsuccess(trans('Donation  has been successfully created',[ 'etity' => 'donation']));
    }

    public function show(Donation $donation)
    {
        return view($donation->view,compact('donations'));
    }

    public function edit(Donation $donation)
    {
        return view('backend.donation.edit',compact('donation'));
    }

    public function update(UpdateDonation $request,Donation $donation)
    {
        DB::transaction(function () use($request,$donation)
        {
            $donation->update($request->data());

//            $this->uploadRequestImage($request,$donation);
        });
        return redirect()->route('donation.index')->withsuccess(trans('donation has been successfully updated',['entity'=>'donation']));
    }

    public function delete(Donation $donation)
    {
        $donation->delete();

        return back()->withsuccess(trans('donation has been deleted successfully', ['entity'=>'donation']));
    }
}
