<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Websitesetting;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Newsletter;
use App\Models\Static_page;
use App\Models\Subscriber;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Client;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Blogcomment;
use Mail;
use DB;
use Validator;
use Session;

class HomeController extends Controller
{
    public function index(){
       $portfolio= Portfolio::where('fetured',1)->where('status',1)->get();
       $slider= Slider::where('status',1)->get();
       $page=Page::where('status',1)->where('fetured_service',1)->get();
       $services=Page::where('status',1)->where('fetured_service',1)->Orderby('id','DESC')->get();
       $faq=Faq::where('status',1)->where('fetured',1)->get();
       $clients=Client::where('status',0)->get();
       $meta=array();
       $meta=['keywords'=>'#','description'=>'#'];
       $setting=Websitesetting::find(1);
       $blog = DB::table('categories')
        ->leftJoin('blogs', 'blogs.cat_id', '=', 'categories.id')->
        select('categories.name','categories.slug as cat_slug','blogs.*')->where('blogs.status',1)
            ->get();
        return view('front.home',compact('clients','portfolio','page','meta','setting','slider','faq','blog','services'));
    }
    public function about(){
        $meta=array();
        $meta=['keywords'=>'#','description'=>'#'];
        $page=Page::where('status',1)->get();
         $portfolio= Portfolio::where('fetured',1)->where('status',1)->get();
        $setting=Websitesetting::find(1);
        $team=Team::where('status',1)->get();
        return view('front.about',compact('meta','setting','page','portfolio','team'));
    }
    public function contact(){
        $meta=array();
        $meta=['keywords'=>'#','description'=>'#'];
        $setting=Websitesetting::find(1);
        return view('front.contact',compact('meta','setting'));
    }
    public function faq(){
        $meta=array();
        $faq=Faq::where('status',1)->get();
        $meta=['keywords'=>'#','description'=>'#'];
        return view('front.faq',compact('faq','meta'));
    }



public function course_list($cat_slug){
    $meta=array();
     $category = Category::where('status',1)->where('slug',$cat_slug)->first();
    //  dd($category->id);
        $page=Page::where('status',1)->where('cat_id',$category->id)->get();
        //   dd($page);
       
        // $meta=['meta_title'=>'Course List','keywords'=>$page->meta_keywords,'description'=>$page->meta_description]; 
        
        return view('front.course',compact('page','category'));
}

    public function course_details($slug,$cat_slug){
        $meta=array();
        $page=Page::where('status',1)->where('slug',$cat_slug)->first();
        //    print_r($page);
       
        $meta=['meta_title'=>$page->page_title,'keywords'=>$page->meta_keywords,'description'=>$page->meta_description]; 
        
        return view('front.course_details',compact('page','meta'));
    }
    //  for services page
    public function services(){
        $all=Portfolio::where('status',1)->get();
        $wordpress=Portfolio::where('status',1)->where('categories','Wordpress')->get();
        $html=Portfolio::where('status',1)->where('categories','html')->get();
        $php=Portfolio::where('status',1)->where('categories','Php')->get();
        $laravel=Portfolio::where('status',1)->where('categories','Laravel')->get();
        $meta=array();
        $meta=['keywords'=>'#','description'=>'#'];
        $page=Page::where('status',1)->get();
        return view('front.services',compact('page','meta','html','wordpress','html','laravel','php'));
    }
    public function category($slug){
        $meta=array();
        $meta=['keywords'=>'#','description'=>'#'];
        $category = Category::where('status',1)->where('slug',$slug)->first();
        $page=Page::where('status',1)->where('cat_id',$category['id'])->get();
        return view('front.services',compact('page','meta'));
    }

    public function services_details($slug){
        $meta=array();
        $category = Category::where('status',1)->get();
        $service = DB::table('categories')
        ->where('pages.slug','=',$slug)
        ->leftJoin('pages', 'pages.cat_id', '=', 'categories.id')->
        select('categories.name','categories.slug as cat_slug','pages.*')
        ->first();
      
        $meta=['meta_title'=>$service->meta_title,'keywords'=>$service->meta_keywords,'description'=>$service->meta_description];
            if($service){
                return view('front.services-details',compact('service','category','meta'));
            }
            else{
                return back();
            }
    }
  

    
    //  for Blog Code
    public function blog(Request $request){
        $meta=array();
        $meta=['keywords'=>'#','description'=>'#'];
        $page=DB::table('categories')
        ->select('categories.*',DB::raw('(select count("blogs.cat_id") FROM blogs where categories.id=blogs.cat_id) as total_count'))->get();
        
        // $blog=Blog::where('title', 'LIKE', '%'.$request->search.'%')->orWhere('description', 'LIKE', '%'.$request->search.'%')->paginate(6);
        
        $setting=$this->setting();
        $recent=Blog::where('status',1)->orderBy('id','DESC')->take(5)->get();
        $tags=Tag::select('name')->distinct()->get();
        
        if(isset($_GET['categories']) && $_GET['categories'])
                {
                    $cat_id=Category::where('slug',$_GET['categories'])->first();
                    // dd($cat_id);
                    if(!empty($cat_id)  && $cat_id!=null)
                    {
                        $blog=Blog::where('cat_id', $cat_id['id'])->paginate(6);

                    }
                    else
                    {
                        return back()->with('message','No Blog Found Categories Related');
                    }
                }
                
        
        elseif(isset($_GET['tags']) && $_GET['tags'])
        {
            $blog=Blog::where('title', 'LIKE', '%'.$_GET['tags'].'%')->orWhere('description', 'LIKE', '%'.$_GET['tags'].'%')->paginate(6);
            if(count($blog)<0)
            {
                return back()->with('message','No Blog Found Tag Related');
            }
        }
        else{
            $blog=Blog::where('status',1)->paginate(6);
            }
        return view('front.blog-list', compact('page','blog','recent','setting','meta','tags'));
    }
    
    public function blogAsPerCategory(Request $request,$id){
        $meta=array();
        $meta=['keywords'=>'#','description'=>'#'];
        $page=DB::table('categories')
        ->select('categories.*',DB::raw('(select count("blogs.cat_id") FROM blogs where categories.id=blogs.cat_id) as total_count'))->get();
        
        // $blog=Blog::where('title', 'LIKE', '%'.$request->search.'%')->orWhere('description', 'LIKE', '%'.$request->search.'%')->paginate(6);
        
        $setting=$this->setting();
        $recent=Blog::where('status',1)->orderBy('id','DESC')->take(5)->get();
        $tags=Tag::select('name')->distinct()->get();
        
        if(isset($_GET['categories']) && $_GET['categories'])
                {
                    $cat_id=Category::where('slug',$_GET['categories'])->first();
                    // dd($cat_id);
                    if(!empty($cat_id)  && $cat_id!=null)
                    {
                        $blog=Blog::where('cat_id', $cat_id['id'])->paginate(6);

                    }
                    else
                    {
                        return back()->with('message','No Blog Found Categories Related');
                    }
                }
                
        
        elseif(isset($_GET['tags']) && $_GET['tags'])
        {
            $blog=Blog::where('title', 'LIKE', '%'.$_GET['tags'].'%')->orWhere('description', 'LIKE', '%'.$_GET['tags'].'%')->paginate(6);
            if(count($blog)<0)
            {
                return back()->with('message','No Blog Found Tag Related');
            }
        }
        else{
            $blog=Blog::where('status',1)->where('cat_id',$id)->paginate(6);
            }
        return view('front.blog-list', compact('page','blog','recent','setting','meta','tags'));
    }
    
    public function blog_search(Request $request){
        //   dd($request->all());
            $page=DB::table('categories')
        ->select('categories.*',DB::raw('(select count("blogs.cat_id") FROM blogs where categories.id=blogs.cat_id) as total_count'))->get();
            $recent=Blog::where('status',1)->orderBy('id','DESC')->take(5)->get();
            $tags=Tag::select('name')->distinct()->get();
            $blog=Blog::where('title', 'LIKE', '%'.$request->search.'%')->orWhere('description', 'LIKE', '%'.$request->search.'%')->paginate(10);
             $setting=$this->setting();
            if(count($blog)>0)
            {
                return view('front.blog-list',compact('blog','page','tags','recent','setting'));
            }
            else{
                return back()->with('message','No Blog Found');
            }
    }
    public function blog_details($slug){
        $meta=array();
        $post = Blog::where('slug','=',$slug)->first();
            $post->update([
            'total_view' => $post->total_view + 1
            ]);
            $comment_count=Blogcomment::where('blog_id',$post->id)->where('status',1)->count();
            $comments=Blogcomment::where('status',1)->get();
        $blog = DB::table('categories')
        ->where('blogs.slug','=',$slug)
        ->leftJoin('blogs', 'blogs.cat_id', '=', 'categories.id')->
        select('categories.name','categories.slug as cat_slug','blogs.*')
            ->first();
         $page=DB::table('categories')
            ->select('categories.*',DB::raw('(select count("blogs.cat_id") FROM blogs where categories.id=blogs.cat_id) as total_count'))->get();
        $meta=['meta_title'=>$blog->meta_title,'keywords'=>$blog->meta_keywords,'description'=>$blog->meta_description];  
        $tags=Tag::select('name')->distinct()->get();
        $recent=Blog::where('status',1)->orderBy('id','DESC')->take(5)->skip(0)->get();
        $category= Category::where('status',1)->get();
        $setting=$this->setting();
       
        return view('front.blog-details', compact('blog','category','recent','tags','setting','meta','page','comments','meta'));
    }

    //  for contact us page
    public function contactform(Request $request,Enquiry $e){
     
    $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'phone' => 'required|max:10',
            'email' => 'email:rfc,dns',
            'message' => 'required',
            
  ]);

          if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
          }
        
      $fordata=array('name'=>$request->name,'phone'=>$request->phone,'email'=>$request->email,'message'=>$request->message,'course'=>$request->course);
      Session::put('data',$fordata);
    
    
      
            //  $secret_key = env('Secreat_key');
            //  $response = $request['g-recaptcha-response'];       
            //  $user_ip = $_SERVER['REMOTE_ADDR'];
            //  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response&remoteip=$user_ip";
            //  $fire = file_get_contents($url);
            // $result=json_decode($fire);  
                
    //  if($result->success==true)
    //         { 
                    
                    
                    $data=$request->all();
                    $data['status']=1;
                    $result=$e->create($data);
                    if($result)
                    {
                        Mail::to('contact@kiitm.co.in')->send(new \App\Mail\MailContact($data));
                        Session::pull('data');
                       return redirect('/thank-you')->with('message','Successfully Send');
                    }
                    else
                    {
                    return redirect('/contact')->with('message','Something Went Wrong!');
                    }
            // }
            // else{
    
            //         session()->flash('message','Please Fill Google Captcha');
            //         return redirect('/contact/');
            //     }
        
      }
     
    
    public function blogCommentStore(Request $request,Blogcomment $bc){
         $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'email:rfc,dns',
            'comments' => 'required',
            'captch' => 'required',
        ]);
        
        if($request->first_value + $request->second_value == $request->captch)
      {
         $data=$request->all();
        $data['status']=0;
        $result=$bc->create($data);
        if($result)
        {
           return redirect('/thank-you')->with('message','Your Comment is under review of admin..');
        }
        else
        {
        return back()->with('message','Something Went Wrong!');
        }
      
    }
     else
      {
          return back()->with('message','Captch Not Match');
      }
    }

    public function subscribe(Request $request,Subscriber $s){
        // dd('dafds');
        $data=$request->all();
        $data['status']=1;
        if($s->create($data))
        {
            Mail::to($request->email)->send(new \App\Mail\MailSubscriber($data));
            return redirect('/thank-you');
        }
        else{
            
            return back()->with('message','Something went wrong!');
        }
        

    }
    public function terms(){
        return view('front.terms');
    }

    public function privacy(){
        return view('front.privacy');
    }
    public function thankyou(){
        return view('front.thankyou');
    }
}
