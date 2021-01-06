<?php

namespace App\Http\ViewCreators;

use Illuminate\View\View;

class BackendMenuCreator
{

    /**
     * The user model.
     *
     * @var \App\Models\User;
     */
    protected $user;

    /**
     * Create a new menu bar composer.
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function create(View $view)
    {
        $menu[] = [
            'class' => false,
            'route' => url('admin/home'),
            'icon'  => 'md md-home',
            'title' => 'Home'
        ];
      
         array_push($menu, [
            'class' => false,
            'route' => route('menu.index'),
            'icon'  => 'md md-menu',
            'title' => 'Menu',
        ]);
          array_push($menu, [
            'class' => false,
            'route' => route('slider.index'),
            'icon'  => 'md md-image',
            'title' => 'Homepage Slider',
        ]);
          array_push($menu, [
            'class' => false,
            'route' => route('about.index'),
            'icon'  => 'md md-description',
            'title' => 'About Section',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('donation.index'),
            'icon'  => 'md md-description',
            'title' => 'Donation Section',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('donationform.index'),
            'icon'  => 'md md-description',
            'title' => 'Donation Form Description',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('scholarshipdescription.index'),
            'icon'  => 'md md-description',
            'title' => 'Scholarship Description',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('scholarshiplist.index'),
            'icon'  => 'md md-image',
            'title' => 'Scholarship Photos',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('communitygarden.index'),
            'icon'  => 'md md-rate-review',
            'title' => 'Community Garden Description',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('communitygardenphoto.index'),
            'icon'  => 'md md-image',
            'title' => 'Community Garden Photos',
        ]);
//             array_push($menu, [
//            'class' => false,
//            'route' => route('form.index'),
//            'icon'  => 'md md-rate-review',
//            'title' => 'Form',
//        ]);
//         array_push($menu, [
//            'class' => false,
//            'route' => route('news.index'),
//            'icon'  => 'md md-description',
//            'title' => 'News',
//        ]);
//          array_push($menu, [
//            'class' => false,
//            'route' => route('album.index'),
//            'icon'  => 'md md-photo',
//            'title' => 'GalleryCategories',
//        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('gallerycategory.index'),
            'icon'  => 'md md-photo',
            'title' => 'GalleriesCategories'
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('photo.index'),
            'icon'  => 'md md-image',
            'title' => 'Gallery-Photos',
        ]);

         array_push($menu, [
            'class' => false,
            'route' => route('download.index'),
            'icon'  => 'md md-file-download',
            'title' => 'Brochure/Flyer',
        ]);
        
         
        array_push($menu, [
            'class' => false,
            'route' => route('post.index'),
            'icon'  => 'md md-image',
            'title' => 'Post',
        ]);
//         array_push($menu, [
//            'class' => false,
//            'route' => route('page.index'),
//            'icon'  => 'md md-pages',
//            'title' => 'Page',
//        ]);
//
//         array_push($menu, [
//            'class' => false,
//            'route' => route('traininglocation.index'),
//            'icon'  => 'md md-folder',
//            'title' => 'Training location',
//        ]);
//
       
         array_push($menu, [
            'class' => false,
            'route' => route('team.index'),
            'icon'  => 'md md-account-circle',
            'title' => 'Team'
        ]);

        array_push($menu, [
            'class' => false,
            'route' => route('funders.index'),
            'icon'  => 'md md-account-circle',
            'title' => 'Funder'
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('supporters.index'),
            'icon'  => 'md md-account-circle',
            'title' => 'Supporters'
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('videos.index'),
            'icon'  => 'md md-account-circle',
            'title' => 'Videos'
        ]);

        array_push($menu, [
            'class' => false,
            'route' => route('servicecategory.index'),
            'icon'  => 'md md-account-circle',
            'title' => 'Services List'
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('servicephoto.index'),
            'icon'  => 'md md-image',
            'title' => 'Service Details',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('room.index'),
            'icon'  => 'md md-image',
            'title' => 'Room Hire',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('trevor.index'),
            'icon'  => 'md md-image',
            'title' => 'Trevor Images',
        ]);
         /* */
        
        $view->with('allMenu', $menu);
    }
}
