<?php
namespace App\Http\Controllers;
use App\Mail\ApplyNotifiable;
use App\Mail\HireNotifiable;
use App\Mail\InquiryNotifiable;
use App\Mail\InquiryNotifiableDonation;
use App\Mail\PartnerNotifiable;
use App\Models\CommunityGarden;
use App\Models\CommunityGardenPhoto;
use App\Models\Donation;
use App\Models\DonationForm;
use App\Models\ScholarshipDescription;
use App\Models\GalleryCategory;
use App\Models\ScholarshipList;
use App\Models\ServiceCategory;
use App\Models\ServicePhoto;
use App\Models\Supporters;
use App\Models\Trevor;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\News;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Team;
use App\Models\Post;
use App\Models\Download;
use App\Models\About;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use App\Models\Image;
use App\Models\Room;
use App\Photos;
use App\Models\Funders;
use App\Models\Galleries;


class FrontendController extends Controller
{
    public function homepage()
    {
        $posts = Post::where('is_published', 1)->orderBy('id', 'DESC')->limit('3')->get();
        $slider = Slider::where('is_published', 1)->orderBy('id', 'DESC')->limit('3')->get();
        $setting = Setting::where('slug', '=', 'logo')->get();
        $services = ServiceCategory::where('is_published', 1)->get();
        $team = Team::where('is_published', '1')->get();
        $galleries = GalleryCategory::where('is_published', '1')->orderBy('id', 'ASC')->limit('6')->get();
        $about = About::where('is_published', '1')->orderBy('id', 'DESC')->limit('1')->get();
        return view('frontend.home', compact('setting', 'slider', 'posts', 'services', 'team', 'galleries','about'));
    }

    public function roomhire()
    {
        $lounges = Room::where('category', 'Lounge')->orderBy('id', 'DESC')->get();
        $rumatis = Room::where('category', 'Raumati(Outside Room)')->orderBy('id', 'DESC')->get();
        $meetings = Room::where('category', 'Meeting/Interview Room')->orderBy('id', 'DESC')->get();

        return view('frontend.room.roomhire', compact('lounges', 'rumatis', 'meetings'));
    }

    public function gallerylist()
    {
        $galleries = Photo::where('is_published', '1')->orderBy('id', 'DESC')->get();
        return view('frontend.album.gallerylist', compact('galleries'));
    }

    public function trevor()
    {
        $trevors = Trevor::where('is_published', '1')->orderBy('id', 'DESC')->get();
        return view('frontend.room.trevor', compact('trevors'));
    }

    public function photos()
    {
        $gallerycategorys = GalleryCategory::where('is_published', 1)->orderBy('id', 'ASC')->get();
        $videos = Videos::where('is_published', 1)->get();
        $photos = Photos::where('is_published', 1)->orderBy('id', 'DESC')->limit('3')->get();
        return view('frontend.about.photos', compact('photos', 'videos', 'gallerycategorys'));
    }

    public function funders()
    {
        $funders = Funders::where('is_published', 1)->get();
        $supporters = Supporters::where('is_published', 1)->get();
        return view('frontend.about.funders', compact('funders', 'supporters'));
    }

    public function post($slug)
    {
        $otherposts = Post::where('is_published', 1)->orderBy('id', 'DESC')->limit('3')->get();
        $posts = Post::whereSlug($slug)->get();
        return view('frontend.post.post', compact('posts','otherposts'));
    }

    public function resources()
    {
        return view('frontend.resources.resources');
    }


    public function contactrequest(Request $request)
    {
        $mailParam = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phonenumber,
            'message' => $request->message
        ];

        Mail::to('prashant.thapa1948@gmail.com')->send(new InquiryNotifiableDonation($mailParam));
        session()->flash('msg', 'Your message has been sent.');
        return redirect()->back();
    }

    public function community()
    {
        $commimage = CommunityGardenPhoto::where('is_published', 1)->orderBy('id', 'DESC')->get();
        $comdetails = CommunityGarden::where('is_published', 1)->orderBy('id', 'DESC')->limit('1')->get();
        return view('frontend.community.community', compact('comdetails','commimage'));
    }

    public function samfund()
    {
        $scholarshipdescriptionsamfunds = ScholarshipDescription::where('title', 'SAM – Sport, Music & Cultural Fund')->get();
        $scholarshipdescriptionwaikatos = ScholarshipDescription::where('title', 'Scholarships University of Waikato.')->get();

        $samfunds = ScholarshipList::where('scholarship_type','<>','')->distinct()->get();
        $samfunds = ScholarshipList::where('scholarship_type', 'SAM – Sport, Music & Cultural Fund')->get();
        $waikatos = ScholarshipList::where('scholarship_type', 'Scholarships University of Waikato.')->get();

        return view('frontend.scholarships.samfund',compact('samfunds', 'waikatos','scholarshipdescriptionsamfunds','scholarshipdescriptionwaikatos'));
    }

    public function volunteer()
    {
        return view('frontend.volunteer.volunteer');
    }

    public function donation()
    {
        return view('frontend.donation.donation');
    }

    public function donate()
    {
        $donations = Donation::where('is_published', '1')->orderBy('id', 'DESC')->limit('1')->get();
        $donationformdetails = DonationForm::where('is_published', '1')->orderBy('id', 'DESC')->limit('1')->get();
        return view('frontend.donation.makedonation',compact('donations','donationformdetails'));
    }


    public function newsletter()
    {
        $downloadspdfs = Download::where('extension', 'pdf')->get();
        $downloadsimages = Download::where('extension', '<>','pdf')->get();
        return view('frontend.newsletter.newsletter', compact('downloadspdfs', 'downloadsimages'));
    }


    public function document()
    {
        $document = Download::where('is_published', '1')->get();
        return view('frontend.brochure.document', compact('document'));
    }


    public function album()
    {
        $albums = Gallery::with('Photos')->get();
        $gallery = Gallery::where('view', 'gallery')->get();
        return view('frontend.album.album', compact('gallery', 'albums'));
    }

    public function gallery($slug)
    {
        $gallerytitles = GalleryCategory::whereSlug($slug)->get();
        $albums = Photo::where('category', $slug)->get();
        return view('frontend.album.gallery', compact('albums', 'gallerytitles'));
    }

    public function services($slug)
    {
        $servicestitles = ServiceCategory::whereSlug($slug)->get();
        $albums = ServicePhoto::where('category', $slug)->get();
        return view('frontend.services.services', compact('albums', 'servicestitles'));
    }

    public function service()
    {
        $courses = ServicePhoto::where('category', 'coursesworkshopsgroups')->get();
        $vegetables = ServicePhoto::where('category', 'vegetable-fruit-box-11')->get();
        $legaladvices = ServicePhoto::where('category', 'legal-advice')->get();
        $budgetadvices = ServicePhoto::where('category', 'budgeting-advice')->get();
        $benefits = ServicePhoto::where('category', 'benefithousing-nzacc-advocacy')->get();
        $events = ServicePhoto::where('category', 'events')->get();

        return view('frontend.services.service', compact('vegetables', 'legaladvices', 'budgetadvices',
            'benefits', 'events', 'courses'));
    }


    public function team()
    {
        $team = Team::where('is_published', '1')->get();

        return view('frontend.about.team', compact('team'));
    }

    public function inquiry(Request $request)
    {
        $mailParam = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        dd($mailParam);


        Mail::to('butteryhousy@gamil.com')->send(new InquiryNotifiable($mailParam));
        return redirect()->back();
    }


    public function newsletterrequest(Request $request)
    {
        $mailParam = [
            'firstname' => $request->firstname,
            'secondname' => $request->secondname,
            'email' => $request->email,
            'communitycheck' => $request->communitycheck,
            'organisationcheck' => $request->organisationcheck,
            'volunteercheck' => $request->volunteercheck,
            'fundercheck' => $request->fundercheck
        ];

        Mail::to('prashant.thapa1948@gmail.com')->send(new InquiryNotifiable($mailParam));
        return redirect()->route('newsletter')->withsuccess(['you have been successfully subscribed']);
    }

    public function contact()
    {
        $setting = Setting::where('slug', '=', 'logo')->first();

        return view('frontend.contact.contact', compact('setting'));
    }
}

 ?>
