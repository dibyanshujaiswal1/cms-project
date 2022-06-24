<?php

// use App\Http\Controllers\BannerController;

use App\Http\Controllers\AdminController\AboutUsController;
use App\Http\Controllers\AdminController\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\AdminController\BannerController;
use App\Http\Controllers\AdminController\BlogController;
use App\Http\Controllers\AdminController\ContactController;
use App\Http\Controllers\AdminController\EventController;
use App\Http\Controllers\AdminController\GalleryController;
use App\Http\Controllers\AdminController\LogoController;
use App\Http\Controllers\AdminController\MemberController;
use App\Http\Controllers\AdminController\NewsController;
use App\Http\Controllers\AdminController\PublicationController;
use App\Http\Controllers\AdminController\SocialmediaController;
use App\Http\Controllers\AdminController\UsermessageController;
use App\Http\Controllers\AdminController\UsersDataController;
use App\Http\Controllers\UserController\MainpageController;
use App\Models\Socialmedia;

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






Route::middleware(['logincheck'])->group(function(){
Route::get('admin/dashboard',[WebpageController::class,'dashboard']);
//for change password
Route::get('/changePassword', [AuthController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('Cpassword',[AuthController::class,'ChangePassword'])->name('change.password');
Route::post('update-users/{id}',[AuthController::class,'updateid'])->name('update.user');
Route::get('updateuserid/{id}',[AuthController::class,'editid']);


//for banner
Route::get('create-banner',[BannerController::class,'createBanner'])->name('banner.create');
Route::post('add-banner',[BannerController::class,'storeBanner'])->name('add.banner');
Route::get('bannerlist',[BannerController::class,'bannerList'])->name('get.banner');
Route::post('update-banner/{id}',[BannerController::class,'updateBanner'])->name('update.banner');
Route::get('update/{id}',[BannerController::class,'editBanner']);
Route::get('delete/{id}',[BannerController::class,'delete']);
Route::get('viewdetails-banners/{id}',[BannerController::class,'BannerDetails'])->name('view.details');
//for blogs
Route::get('create-blog',[BlogController::class,'createblog'])->name('blog.create');
Route::post('add-blog',[BlogController::class,'storeblog'])->name('add.blog');
Route::get('bloglist',[BlogController::class,'bloglist'])->name('get.blog');
Route::get('updateblog/{id}',[BlogController::class,'editBlog']);
Route::post('update-blog/{id}',[BlogController::class,'updateBlog'])->name('update.blog');
Route::get('viewdetails-blogs/{id}',[BlogController::class,'BlogDetails'])->name('view.blogsdetails');
Route::get('deleteblog/{id}',[BlogController::class,'delete']);
//for member
Route::get('create-member',[MemberController::class,'createmember'])->name('member.create');
Route::post('add-member',[MemberController::class,'storemember'])->name('add.member');
Route::get('memberlist',[MemberController::class,'memberlist'])->name('get.member');
Route::get('updatemember/{id}',[MemberController::class,'editmember']);
Route::post('update-member/{id}',[MemberController::class,'updatemember'])->name('update.member');
Route::get('viewdetails-member/{id}',[MemberController::class,'MemberDetails'])->name('view.memberdetails');
Route::get('deletemember/{id}',[MemberController::class,'deletemember']);
//for gallery
Route::get('create-gallery',[GalleryController::class,'creategallery'])->name('gallery.create');
Route::post('add-gallery',[GalleryController::class,'storegallery'])->name('add.gallery');
Route::get('gallerylist',[GalleryController::class,'gallarylist'])->name('get.gallery');
Route::get('updategallery/{id}',[GalleryController::class,'editgallery']);
Route::post('update-gallery/{id}',[GalleryController::class,'updategallery'])->name('update.gallery');
Route::get('deletegallery/{id}',[GalleryController::class,'deletegallery']);
//for logo
Route::get('create-logo',[LogoController::class,'createlogo'])->name('logo.create');
Route::post('add-logo',[LogoController::class,'storelogo'])->name('add.logo');
Route::get('logolist',[LogoController::class,'logolist'])->name('get.logo');
Route::get('updatelogo/{id}',[LogoController::class,'editlogo']);
Route::post('update-logo/{id}',[LogoController::class,'updatelogo'])->name('update.logo');
Route::get('deletelogo/{id}',[LogoController::class,'deletelogo']);
//for news
Route::get('create-news',[NewsController::class,'createnews'])->name('news.create');
Route::post('add-news',[NewsController::class,'storenews'])->name('add.news');
Route::get('news-list',[NewsController::class,'newslist'])->name('get.news');
Route::get('updatenews/{id}',[NewsController::class,'editnews']);
Route::post('update-news/{id}',[NewsController::class,'updatenews'])->name('update.news');
Route::get('viewdetails-news/{id}',[NewsController::class,'Newsdetails'])->name('view.news_details');
Route::get('deletenews/{id}',[NewsController::class,'deletenews']);
//for events
Route::get('create-event',[EventController::class,'createevent'])->name('event.create');
Route::post('add-event',[EventController::class,'storeevent'])->name('add.event');
Route::get('event-list',[EventController::class,'eventlist'])->name('get.event');
Route::get('updateevent/{id}',[EventController::class,'editevent']);
Route::post('update-event/{id}',[EventController::class,'updateevent'])->name('update.event');
Route::get('viewdetails-event/{id}',[EventController::class,'eventdetails'])->name('view.eventsdetails');
Route::get('delete-event/{id}',[EventController::class,'deleteevent']);
//for contact
Route::get('create-contact',[ContactController::class,'createcontact'])->name('contacts.create');
Route::post('add-admin-contact',[ContactController::class,'storecontact'])->name('admin.contact');
Route::get('contact-list',[ContactController::class,'contactlist'])->name('get.contact');
Route::get('updatecontact/{id}',[ContactController::class,'editcontact']);
Route::post('update-contact/{id}',[ContactController::class,'updatecontact'])->name('update.contact');
Route::get('delete-contact/{id}',[ContactController::class,'deletecontact']);
//for social media links
Route::get('create-socialmedia',[SocialmediaController::class,'createmedia'])->name('socialmedia.create');
Route::post('add-socialmedia',[SocialmediaController::class,'storemedia'])->name('add.socialmedia');
Route::get('media-list',[SocialmediaController::class,'mediatlist'])->name('get.media');
Route::get('updatemedia/{id}',[SocialmediaController::class,'editmedia']);
Route::post('update-media/{id}',[SocialmediaController::class,'updatemedia'])->name('update.media');
Route::get('delete-media/{id}',[SocialmediaController::class,'deletemedia']);
//for users message
Route::get('message-list',[UsermessageController::class,'messagelist'])->name('get.message');
Route::get('delete-message/{id}',[UsermessageController::class,'deletemessage']);
//for about us
Route::get('create-aboutus',[AboutUsController::class,'createaboutus'])->name('about.create');
Route::post('add-aboutus',[AboutUsController::class,'storeaboutus'])->name('add.about');
Route::get('aboutlist',[AboutUsController::class,'aboutslist'])->name('get.about');
Route::post('update-aboutus/{id}',[AboutUsController::class,'updateaboutus'])->name('update.aboutus');
Route::get('updateaboutus/{id}',[AboutUsController::class,'editaboutus']);
Route::get('viewdetails-aboutus/{id}',[AboutUsController::class,'aboutusdetails'])->name('view.aboutusdetails');
Route::get('delete-aboutus/{id}',[AboutUsController::class,'deleteaboutus']);
//for publication
Route::get('create-publication',[PublicationController::class,'createpublication'])->name('publication.create');
Route::post('add-publications',[PublicationController::class,'storepublication'])->name('add.publication');
Route::get('publicationlist',[PublicationController::class,'publicationlist'])->name('get.publication');
Route::get('publication-details/{id}',[PublicationController::class,'publicationdetails'])->name('view.publicationdetails');
Route::get('updatepublication/{id}',[PublicationController::class,'editpublication']);
Route::post('update-publication/{id}',[PublicationController::class,'updatepublication'])->name('update.publication');
Route::get('delete-publication/{id}',[PublicationController::class,'deletepublication']);

});
//for frontend user
// Route::get('get-banner',[MainpageController::class,'getbanner']);
Route::get('/',[MainpageController::class,'main']);
Route::get('view-blogdetails/{id}',[MainpageController::class,'blogdetails'])->name('view.blog');
Route::get('all-blogs',[MainpageController::class,'allblogs'])->name('all.blog');
Route::get('view-newsdetails/{id}',[MainpageController::class,'newsdetails'])->name('view.newsdetails');
Route::get('all-news',[MainpageController::class,'allnews'])->name('all.news');
Route::get('view-eventdetails/{id}',[MainpageController::class,'eventdetails'])->name('view.eventdetails');
Route::get('all-event',[MainpageController::class,'allevent'])->name('all.event');
Route::get('contact',[MainpageController::class,'contact'])->name('contact.create');
Route::post('add-contact',[MainpageController::class,'storeusermessage'])->name('add.contact');
Route::get('all-about',[MainpageController::class,'allabout'])->name('all.about');
Route::get('view-ourpublication',[MainpageController::class,'ourpublication'])->name('view.ourpublication');
Route::get('view-refrencepublication',[MainpageController::class,'refrencepublication'])->name('view.refrencepublication');
Route::get('view-repprtspublication',[MainpageController::class,'reportpublication'])->name('view.reportspublication');

Route::get('view-publicationdetails/{id}',[MainpageController::class,'publicationdetails'])->name('view.publication');
Route::get('download/{title}',[MainpageController::class,'download'])->name('download.file');



//for login
Route::get('login',[AuthController::class,'login']);
Route::post('store-login',[AuthController::class,'storelogin'])->name('store.login');
Route::get('logout',[AuthController::class,'logout'])->name('logout.admin');





















