<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('home', 'Auth\LoginController@logout');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::put('setting/update', 'SettingController@update')->name('setting.update');

     Route::group(['as' => 'home.', 'prefix' => 'home'], function () {
        Route::get('', 'HomeController@index')->name('home');
        Route::get('create', 'HomeController@create')->name('create');
        Route::post('', 'HomeController@store')->name('store');
        Route::get('{summaries}/edit', 'HomeController@edit')->name('edit');
        Route::put('{summaries}', 'HomeController@update')->name('update');
        Route::delete('{summaries}', 'HomeController@delete')->name('delete');
    });

     /*
        |--------------------------------------------------------------------------
        | Post CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'post.', 'prefix' => 'post'], function () {
        Route::get('', 'PostController@index')->name('index');
        Route::get('create', 'PostController@create')->name('create');
        Route::post('', 'PostController@store')->name('store');
        Route::get('{post}', 'PostController@show')->name('show');
        Route::get('{post}/edit', 'PostController@edit')->name('edit');
        Route::put('{post}', 'PostController@update')->name('update');
        Route::delete('{post}', 'PostController@destroy')->name('destroy');
    });
         /*
        |--------------------------------------------------------------------------
        | Menu CRUD Routes
        |--------------------------------------------------------------------------
        */

         Route::group(['as' => 'menu.', 'prefix' => 'menu'], function () {
        Route::get('', 'MenuController@index')->name('index');
        Route::get('/indexnp', 'MenuController@indexnp')->name('indexnp');
        Route::post('', 'MenuController@store')->name('store');
        Route::put('', 'MenuController@update')->name('update');
        Route::delete('{menu}', 'MenuController@destroy')->name('destroy');

        Route::group(['as' => 'subMenu.'], function () {
            Route::post('{menu}/subMenu', 'MenuController@storeSubMenu')->name('store');
            Route::delete('{menu}/subMenu/{subMenu}', 'MenuController@destroySubMenu')->name('destroy');
            Route::get('{menu}/subMenuModal', 'MenuController@subMenuModal')->name('component.modal');

            Route::group(['as' => 'childsubMenu.'], function () {
                Route::post('{subMenu}/subMenu/childsubMenu', 'MenuController@storeChildSubMenu')->name('store');
                Route::delete('{menu}/subMenu/{subMenu}/childsubMenu/{childSubMenu}', 'MenuController@destroyChildSubMenu')->name('destroy');
                Route::get('{subMenu}/subMenu/childsubMenuModal', 'MenuController@childsubMenuModal')->name('component.modal');
            });
        });
    });


    /*
|--------------------------------------------------------------------------
| About CRUD Routes
|--------------------------------------------------------------------------
*/
    Route::group(['as'=>'about.', 'prefix'=>'about' ], function(){
        Route::get('','AboutController@index')->name('index');
        Route::get('create','AboutController@create')->name('create');
        Route::post('','AboutController@store')->name('store');
        Route::put('{about}','AboutController@update')->name('update');
        Route::get('{about}/edit','AboutController@edit')->name('edit');
        Route::delete('{about}','AboutController@delete')->name('destroy');
    });

    /*
|--------------------------------------------------------------------------
| Community Garden CRUD Routes
|--------------------------------------------------------------------------
*/
    Route::group(['as'=>'communitygarden.', 'prefix'=>'communitygarden' ], function(){
        Route::get('','CommunityGardenController@index')->name('index');
        Route::get('create','CommunityGardenController@create')->name('create');
        Route::post('','CommunityGardenController@store')->name('store');
        Route::put('{communitygarden}','CommunityGardenController@update')->name('update');
        Route::get('{communitygarden}/edit','CommunityGardenController@edit')->name('edit');
        Route::delete('{communitygarden}','CommunityGardenController@delete')->name('destroy');
    });

    /*
|--------------------------------------------------------------------------
| Community Garden Photos CRUD Routes
|--------------------------------------------------------------------------
*/
    Route::group(['as'=>'communitygardenphoto.', 'prefix'=>'communitygardenphoto' ], function(){
        Route::get('','CommunityGardenPhotoController@index')->name('index');
        Route::get('create','CommunityGardenPhotoController@create')->name('create');
        Route::post('','CommunityGardenPhotoController@store')->name('store');
        Route::put('{communitygardenphoto}','CommunityGardenPhotoController@update')->name('update');
        Route::get('{communitygardenphoto}/edit','CommunityGardenPhotoController@edit')->name('edit');
        Route::delete('{communitygardenphoto}','CommunityGardenPhotoController@delete')->name('destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Scholarship Details CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as'=>'scholarshipdescription.', 'prefix'=>'scholarshipdescription' ], function(){
        Route::get('','ScholarshipDescriptionController@index')->name('index');
        Route::get('create','ScholarshipDescriptionController@create')->name('create');
        Route::post('','ScholarshipDescriptionController@store')->name('store');
        Route::put('{scholarshipdescription}','ScholarshipDescriptionController@update')->name('update');
        Route::get('{scholarshipdescription}/edit','ScholarshipDescriptionController@edit')->name('edit');
        Route::delete('{scholarshipdescription}','ScholarshipDescriptionController@delete')->name('destroy');
    });


    /*
|--------------------------------------------------------------------------
| Scholarship List CRUD Routes
|--------------------------------------------------------------------------
*/
    Route::group(['as'=>'scholarshiplist.', 'prefix'=>'scholarshiplist' ], function(){
        Route::get('','ScholarshipListController@index')->name('index');
        Route::get('create','ScholarshipListController@create')->name('create');
        Route::post('','ScholarshipListController@store')->name('store');
        Route::put('{scholarshiplist}','ScholarshipListController@update')->name('update');
        Route::get('{scholarshiplist}/edit','ScholarshipListController@edit')->name('edit');
        Route::delete('{scholarshiplist}','ScholarshipListController@delete')->name('destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Donation CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as'=>'donation.', 'prefix'=>'donation' ], function(){
        Route::get('','DonationController@index')->name('index');
        Route::get('create','DonationController@create')->name('create');
        Route::post('','DonationController@store')->name('store');
        Route::put('{donation}','DonationController@update')->name('update');
        Route::get('{donation}/edit','DonationController@edit')->name('edit');
        Route::delete('{donation}','DonationController@delete')->name('destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Slider CRUD Routes
    |--------------------------------------------------------------------------
    */
        Route::group(['as'=>'slider.', 'prefix'=>'slider' ], function(){
        Route::get('','SliderController@index')->name('index');
        Route::get('create','SliderController@create')->name('create');
        Route::post('','SliderController@store')->name('store');
        Route::put('{slider}','SliderController@update')->name('update');
        Route::get('{slider}/edit','SliderController@edit')->name('edit');
        Route::delete('{slider}','SliderController@delete')->name('destroy');
        });

    /*
     *
     *    /*
        |--------------------------------------------------------------------------
        | GalleryCategory CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as'=>'gallerycategory.', 'prefix'=>'gallerycategory' ], function(){
        Route::get('','GalleryCategoryController@index')->name('index');
        Route::get('create','GalleryCategoryController@create')->name('create');
        Route::post('','GalleryCategoryController@store')->name('store');
        Route::put('{gallerycategory}','GalleryCategoryController@update')->name('update');
        Route::get('{gallerycategory}/edit','GalleryCategoryController@edit')->name('edit');
        Route::delete('{gallerycategory}','GalleryCategoryController@delete')->name('destroy');
    });


    /*
  *
  *    /*
     |--------------------------------------------------------------------------
     | Services CRUD Routes
     |--------------------------------------------------------------------------
     */
    Route::group(['as'=>'servicecategory.', 'prefix'=>'servicecategory' ], function(){
        Route::get('','ServicesController@index')->name('index');
        Route::get('create','ServicesController@create')->name('create');
        Route::post('','ServicesController@store')->name('store');
        Route::put('{servicecategory}','ServicesController@update')->name('update');
        Route::get('{servicecategory}/edit','ServicesController@edit')->name('edit');
        Route::delete('{servicecategory}','ServicesController@delete')->name('destroy');
    });



    /*
     *
       |--------------------------------------------------------------------------
       | Funders CRUD Routes
       |--------------------------------------------------------------------------
       */
    Route::group(['as'=>'funders.', 'prefix'=>'funders' ], function(){
        Route::get('','FundersController@index')->name('index');
        Route::get('create','FundersController@create')->name('create');
        Route::post('','FundersController@store')->name('store');
        Route::put('{funders}','FundersController@update')->name('update');
        Route::get('{funders}/edit','FundersController@edit')->name('edit');
        Route::delete('{funders}','FundersController@delete')->name('destroy');
    });


    /*
   *
     |--------------------------------------------------------------------------
     | Funders CRUD Routes
     |--------------------------------------------------------------------------
     */
    Route::group(['as'=>'donationform.', 'prefix'=>'donationform' ], function(){
        Route::get('','DonationFormController@index')->name('index');
        Route::get('create','DonationFormController@create')->name('create');
        Route::post('','DonationFormController@store')->name('store');
        Route::put('{donationform}','DonationFormController@update')->name('update');
        Route::get('{donationform}/edit','DonationFormController@edit')->name('edit');
        Route::delete('{donationform}','DonationFormController@delete')->name('destroy');
    });



    /*
       |--------------------------------------------------------------------------
       | Supporters CRUD Routes
       |--------------------------------------------------------------------------
       */
    Route::group(['as'=>'supporters.', 'prefix'=>'supporters' ], function(){
        Route::get('','SupportersController@index')->name('index');
        Route::get('create','SupportersController@create')->name('create');
        Route::post('','SupportersController@store')->name('store');
        Route::put('{supporters}','SupportersController@update')->name('update');
        Route::get('{supporters}/edit','SupportersController@edit')->name('edit');
        Route::delete('{supporters}','SupportersController@delete')->name('destroy');
    });

    /*
    |--------------------------------------------------------------------------
    | Videos CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as'=>'videos.', 'prefix'=>'videos' ], function(){
        Route::get('','VideosController@index')->name('index');
        Route::get('create','VideosController@create')->name('create');
        Route::post('','VideosController@store')->name('store');
        Route::put('{videos}','VideosController@update')->name('update');
        Route::get('{videos}/edit','VideosController@edit')->name('edit');
        Route::delete('{videos}','VideosController@delete')->name('destroy');
    });



    //team
        Route::group(['as'=>'team.', 'prefix'=>'team' ], function(){
        Route::get('','TeamController@index')->name('index');
        Route::get('create','TeamController@create')->name('create');
        Route::post('','TeamController@store')->name('store');
        Route::put('{team}','TeamController@update')->name('update');
        Route::get('{team}/edit','TeamController@edit')->name('edit');
        Route::delete('{team}','TeamController@delete')->name('destroy');
        });

        //download file
        Route::group([ 'as' => 'download.', 'prefix' => 'download' ], function ()
        {
            Route::get('', 'DownloadController@index')->name('index');
            Route::get('create', 'DownloadController@create')->name('create');
            Route::post('store', 'DownloadController@store')->name('store');
            Route::put('{download}', 'DownloadController@update')->name('update');
            Route::get('{download}/edit', 'DownloadController@edit')->name('edit');
            Route::delete('{download}', 'DownloadController@destroy')->name('destroy');

        });

            /*
        |--------------------------------------------------------------------------
        | Photo CRUD Routes
        |--------------------------------------------------------------------------
        */
         Route::group([ 'as' => 'photo.', 'prefix' => 'photo' ], function ()
        {
            Route::get('', 'PhotoController@index')->name('index');
            Route::get('create', 'PhotoController@create')->name('create');
            Route::post('store', 'PhotoController@store')->name('store');
            Route::put('{photo}', 'PhotoController@update')->name('update');
            Route::get('{photo}/edit', 'PhotoController@edit')->name('edit');
            Route::delete('{photo}', 'PhotoController@delete')->name('destroy');

        });

    /*
|--------------------------------------------------------------------------
| Photo CRUD Routes
|--------------------------------------------------------------------------
*/
    Route::group([ 'as' => 'servicephoto.', 'prefix' => 'servicephoto' ], function ()
    {
        Route::get('', 'ServicePhotoController@index')->name('index');
        Route::get('create', 'ServicePhotoController@create')->name('create');
        Route::post('store', 'ServicePhotoController@store')->name('store');
        Route::put('{servicephoto}', 'ServicePhotoController@update')->name('update');
        Route::get('{servicephoto}/edit', 'ServicePhotoController@edit')->name('edit');
        Route::delete('{servicephoto}', 'ServicePhotoController@delete')->name('destroy');

    });

    /*
|--------------------------------------------------------------------------
| Trevor CRUD Routes
|--------------------------------------------------------------------------
*/
    Route::group([ 'as' => 'trevor.', 'prefix' => 'trevor' ], function ()
    {
        Route::get('', 'TrevorController@index')->name('index');
        Route::get('create', 'TrevorController@create')->name('create');
        Route::post('store', 'TrevorController@store')->name('store');
        Route::put('{trevor}', 'TrevorController@update')->name('update');
        Route::get('{trevor}/edit', 'TrevorController@edit')->name('edit');
        Route::delete('{trevor}', 'TrevorController@delete')->name('destroy');

    });


    /*
|--------------------------------------------------------------------------
| Room CRUD Routes
|--------------------------------------------------------------------------
*/
    Route::group([ 'as' => 'room.', 'prefix' => 'room' ], function ()
    {
        Route::get('', 'RoomController@index')->name('index');
        Route::get('create', 'RoomController@create')->name('create');
        Route::post('store', 'RoomController@store')->name('store');
        Route::put('{room}', 'RoomController@update')->name('update');
        Route::get('{room}/edit', 'RoomController@edit')->name('edit');
        Route::delete('{room}', 'RoomController@delete')->name('destroy');

    });

              /*
        |--------------------------------------------------------------------------
        | Form CRUD Routes
        |--------------------------------------------------------------------------
        */
         Route::group([ 'as' => 'form.', 'prefix' => 'form' ], function ()
        {
            Route::get('', 'FormController@index')->name('index');
            Route::get('create', 'FormController@create')->name('create');
            Route::post('store', 'FormController@store')->name('store');
            Route::put('{form}', 'FormController@update')->name('update');
            Route::get('{form}/edit', 'FormController@edit')->name('edit');
            Route::delete('{form}', 'FormController@destroy')->name('destroy');

        });


    Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');


  /*
    |--------------------------------------------------------------------------
    |  Album Controller
    |--------------------------------------------------------------------------
    */
    Route::group([ 'as' => 'album.', 'prefix' => 'album' ], function () {
        Route::get('/', array('as' => 'index','uses' => 'AlbumController@getlist'));
        Route::get('/createalbum', array('as' => 'createalbum','uses' => 'AlbumController@getForm'));
        Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumController@postCreate'));
        Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumController@getDelete'));
        Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumController@getAlbum'));
        Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
        Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
        Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));
        Route::post('/moveimage', array('as' => 'move_image', 'uses' => 'ImageController@postMove'));
    });

    });

/*
|--------------------------------------------------------------------------
| Frontend Controller
|--------------------------------------------------------------------------
*/

    Route::get('/album/{slug}', array('as' => 'show_album','uses' => 'FrontendController@gallery'));

    Route::get('', 'FrontendController@homepage')->name('homepage');


    Route::get('/photos', 'FrontendController@photos')->name('photos');
    Route::get('/funders', 'FrontendController@funders')->name('funders');
    Route::get('/community', 'FrontendController@community')->name('community');
    Route::get('/scholarship', 'FrontendController@samfund')->name('scholarship');
    Route::get('/waikatofund', 'FrontendController@waikatofund')->name('waikatofund');
    Route::get('/donation', 'FrontendController@donation')->name('donation');
    Route::get('/newsletter', 'FrontendController@newsletter')->name('newsletter');
    Route::get('/enquiryform', 'FrontendController@enquiryform')->name('enquiryform');
    Route::get('/resources', 'FrontendController@resources')->name('resources');
    Route::get('/donate', 'FrontendController@donate')->name('donate');
    Route::get('/post/{id}', array('as' => 'post','uses' => 'FrontendController@post'));

    Route::get('/partner', 'FrontendController@partners')->name('partner');
    Route::get('/partnerwithacademy', 'FrontendController@partnerwithacademy')->name('partnerwithacademy');
    Route::get('/message', 'FrontendController@messageofgreeting')->name('message');
    Route::get('/leadership', 'FrontendController@leadership')->name('leadership');
    Route::get('/team', 'FrontendController@team')->name('team');
    Route::get('/industrial-advisory', 'FrontendController@industrial')->name('industrial-advisory');
    Route::get('/technical-advisory', 'FrontendController@technical')->name('technical-advisory');
    Route::get('/overview', 'FrontendController@overview')->name('overview');
    Route::get('/hire', 'FrontendController@hiregraduates')->name('hire');
    Route::get('/learnerstestimonials', 'FrontendController@learners')->name('learnerstestimonials');
    Route::get('/success-story', 'FrontendController@success')->name('success-story');
    Route::get('/employerstestimonials', 'FrontendController@employers')->name('employerstestimonials');
    Route::get('/location', 'FrontendController@locations')->name('location');
    Route::get('/album', array('as' => 'album','uses' => 'FrontendController@album'));
    Route::get('/gallery/{id}', array('as' => 'gallery','uses' => 'FrontendController@gallery'));
    Route::get('/services/{id}', array('as' => 'services','uses' => 'FrontendController@services'));

    Route::get('/gallery', 'FrontendController@gallerylist')->name('gallerylist');

    Route::get('/volunteer', 'FrontendController@volunteer')->name('volunteer');

    Route::get('/service', 'FrontendController@service')->name('service');
    Route::get('/roomhire', 'FrontendController@roomhire')->name('roomhire');
    Route::get('/trevor', 'FrontendController@trevor')->name('trevor');

    Route::post('handle-payment', 'PayPalController@handlePayment')->name('make.payment');
    Route::get('cancel-payment', 'PayPalController@paymentCancel')->name('cancel.payment');
    Route::get('payment-success', 'PayPalController@paymentSuccess')->name('success.payment');

    Route::get('/document', 'FrontendController@document')->name('document');
    Route::get('/contact', 'FrontendController@contact')->name('contact');
    Route::post('/newsletterrequest', 'FrontendController@newsletterrequest')->name('newsletter.newsletterrequest');
    Route::post('/contactrequest', 'FrontendController@contactrequest')->name('contact.contactrequest');
