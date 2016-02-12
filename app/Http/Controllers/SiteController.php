<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\ItemPhotos;
use App\Items;
use App\SubCategory;
use App\Comment;
use App\Library;
use App\Photo;
use App\SideSlider;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Partner;
use App\News;
use App\Staff;
use App\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Finder\Iterator\FilePathsIterator;

class SiteController extends Controller
{

    public function checkLogin(Request $request)
    {
        if (Auth::user()->check()){
            return Redirect::route('site.index');
        }

        $userData = array(
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        );

        if(Auth::user()->attempt($userData, true)){
            return Redirect::route('site.index');
        } else {
            return Redirect::route('site.login.show');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showItemDetail($slug, $id){
        $data['item'] = Items::findOrFail($id);
        $item = Items::findOrFail($id);
        if(is_dir( public_path().'/uploads/photos/'.$id.'/')){
            $photos  = scandir(public_path().'/uploads/photos/'.$id.'/',1);
            $files = array_diff($photos, array('.', '..'));
        }else{
            $files = [];
        }
        $data['item_id'] = $id;
        $data['itemphotos'] = $files;
        $data['colors'] = Items::find($id)->ItemColors()->get();
        $data['sizes'] = Items::find($id)->ItemSize()->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();
        $data['topseller'] = Items::where('category_id','1')->get();
        $data['categorytop'] = Category::findOrFail($item->category_id);
        $data['subcategorytop'] = SubCategory::findOrFail($item->subcategory_id);
        $data['related'] = Items::where('category_id',$item->category_id)->get();
        return view('site.item-detail',$data);
    }

    public function index()
    {
        $data['slider'] = Slide::orderBy('created_at', 'asc')->get();
        $data['sideslider'] = SideSlider::orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();
        $category = $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();
         $data['itemcar'] = Items::orderBy('category_id','asc')->get();
        $data['itemshot'] = Items::where('spec','like','%1%')->orderBy('created_at', 'asc')->get();
        $data['onlyur'] = Items::where('spec','like','%0%')->get();
        $data['news'] = News::orderBy('created_at', 'asc')->take(3)->skip(0)->get();
        $data['staff'] = Staff::orderBy('created_at', 'asc')->take(4)->skip(0)->get();
        return view('site.index',$data);

    }
    public function AddToCart($id, $slug)
    {
        Cart::associate('Items')->add('293ad', 'Product 1', 1, 9.99, array('size' => 'large'));
        $content = Cart::get('293ad');

            dd($content);
        foreach($content as $row)
        {
            echo 'You have ' . $row->qty . ' items of ' . $row->product->name . ' with description: "' . $row->product->description . '" in your cart.';
        }
    }
    public function ShowContact()
    {
        return view('site.contact');

    }
    public function ShowNews()
    {

        $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();
        $data['slider'] = Slide::orderBy('created_at', 'asc')->get();
        $data['sideslider'] = SideSlider::orderBy('created_at', 'asc')->get();
        $data['news'] = News::orderBy('created_at', 'desc')->paginate(5);
        $data['sideNews'] = News::orderBy('created_at', 'desc')->take(3)->skip(0)->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['album'] = Album::orderBy('created_at', 'asc')->take(12)->skip(0)->get();
        return view('site.news',$data);

    }
    public function ShowStaff()
    {
        $data['news'] = News::orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['staff'] = Staff::orderBy('created_at', 'asc')->get();
        return view('site.staff',$data);

    }
    public function ShowAbout()
    {
        $data['news'] = News::orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['staff'] = Staff::orderBy('created_at', 'asc')->get();
        return view('site.about',$data);

    }
    public function ShowLibrary()
    {
        $data['library'] = Library::orderBy('created_at', 'asc')->get();
        return view('site.library',$data);

    }
    public function ShowGallery()
    {
        $data['album'] = Album::orderBy('created_at', 'asc')->get();
        return view('site.album',$data);

    }
    public function ShowPhotos($id)
    {
        $data['photos'] = Photo::where('album_id',$id)->get();
        return view('site.photos',$data);

    }
    public function ShowTerms($id)
    {
        $data['photos'] = Photo::where('album_id',$id)->get();
        return view('site.photos',$data);

    }
    public function ShowRegistration()
    {
        $data['slider'] = Slide::orderBy('created_at', 'asc')->get();
        $data['sideslider'] = SideSlider::orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        return view('site.registration', $data);

    }
    public function ShowCategoryItems($id)
    {
        $data['slider'] = Slide::orderBy('created_at', 'asc')->get();
        $data['sideslider'] = SideSlider::orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();

        $data['categoryex'] = Category::findOrFail($id);
        $data['categoryex'] = Category::with('SubCategory')->findOrFail($id);
        $data['item'] = Items::where('category_id', $id)->orderBy('created_at', 'asc')->paginate(12);
        return view('site.category-item-list',$data);

    }
    public function ShowSubCategoryItems($id)
    {
        $data['slider'] = Slide::orderBy('created_at', 'asc')->get();
        $data['sideslider'] = SideSlider::orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();
        $data['categoryex'] = Category::findOrFail($id);
        $data['categoryex'] = Category::with('SubCategory')->findOrFail($id);
        $data['subcategory'] = SubCategory::findOrFail($id);
        $data['item'] = Items::where('subcategory_id', $id)->orderBy('created_at', 'asc')->paginate(12);
        return view('site.category-item-list',$data);

    }
    public function ShowLogin()
    {
        if(Auth::user()->check()){
            return Redirect::route('site.index');
        }
        $data['slider'] = Slide::orderBy('created_at', 'asc')->get();
        $data['sideslider'] = SideSlider::orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        return view('site.login',$data);

    }
    public function ShowTeam()
    {
        $data['staff'] = Staff::orderBy('created_at', 'desc')->paginate(4);
        return view('site.staff',$data);

    }
    public function showPage($slug, $id){
        $data['page'] = Page::findOrFail($id);
        if($slug != $data['page']->slug) return Redirect::route('site.show.page', $data['page']->slug, $id);
        return view('site.news');
    }
    public function showNewsDetail($slug, $id){

        $data['category'] = Category::with('SubCategory')->orderBy('created_at', 'asc')->get();
        $data['comment'] = Comment::where('news_id',$id)->get();
        $data['slider'] = Slide::orderBy('created_at', 'asc')->get();
        $data['sideslider'] = SideSlider::orderBy('created_at', 'asc')->get();
        $data['news'] = News::findOrFail($id);
        $data['partner'] = Partner::orderBy('created_at', 'asc')->get();
        $data['sideNews'] = News::orderBy('created_at', 'desc')->take(3)->skip(0)->get();
        $data['album'] = Album::orderBy('created_at', 'asc')->take(12)->skip(0)->get();
        $data['staff'] = Staff::orderBy('created_at', 'asc')->take(5)->skip(0)->get();
        if($slug != $data['news']->slug) return Redirect::route('site.show.news.detail', $data['page']->slug, $id);
        return view('site.news-detail',$data);
    }
    public function showStaffDetail($slug, $id){
        $data['staff'] = Staff::findOrFail($id);
        if($slug != $data['staff']->slug) return Redirect::route('site.show.staff.detail', $data['staff']->slug, $id);
        return view('site.staff-detail',$data);
    }

    public function SendMail(Request $request)
    {
        $sent = Mail::send('email.template', array('key' => 'value'), function($message)
        {
            $message->from('grdzelo2@yahoo.com');
            $message->to('grdzelog@gmail.com', 'John Smith')->subject('Welcome!');
        });

        if( ! $sent) dd("something wrong");
        dd("send");
        $data['message'] = 'თქვენი შეტყობინება წარმატებით გაიგზავნა';
        return view('site.contact',$data);
    }

}
