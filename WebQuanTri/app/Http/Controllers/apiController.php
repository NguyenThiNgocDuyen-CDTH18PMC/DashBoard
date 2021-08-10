<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Validator;
use App\contact;
use App\dulieu;
use App\gadgests;
use App\videos;
use App\review;
use App\binhluan;


class apiController extends Controller
{
   
    ////TECH-blog
    public function register(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        // return response()->json(['token'], 200);

        $token = $user->createToken('TutsForWeb')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }
    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }
    public function login(Request $request)
    {
        // return response()->json(['error' => '1111111111111111111111'], 200);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // echo bcrypt('1234567'); die();
        // if (Auth::attempt($credentials)) {
        //     // The user is active, not suspended, and exists.
        //     echo '23';
        // }
        //  echo Auth::attempt($credentials) ? 1 : 2; die($request->email);
        if (Auth::attempt($credentials)) {
            // $token = Auth::user()->createToken('TutsForWeb')->accessToken;
            return response()->json(['token' =>  Auth::user()->id], 200);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }
    public function contacts(Request $request)
    {
        $checkcontact =[
            'id'=>$request ->id,
            'username' => $request->username,
            'email'=> $request -> email,
            'phone'=> $request -> phone,
            'subject'=>$request -> subject,
            'message'=> $request ->message,
        ];
        // $checkcontact->save()
        if (Auth::attempt($checkcontact)) {
            // $token = Auth::user()->createToken('TutsForWeb')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }

    }
    public function contact()
    {
        $list = contact::where('trangthai',1)
        ->get();
        return response()->json($list,200);
    }
    public function contactus(Request $request)
    {

        $contact = contact::create([
        'username' => $request->username,
        'email' => $request->email,
        'phone' => $request->phone,
        'subject' => $request->subject,
        'message' => $request->message,
        ]);
 
        return response()->json(['token' => $request->username], 200);
       
        
   }
   public function datas()
   {
    // $list = data::where('trangthai','=',1)
    // ->take();
    // ->get();
    $list =dulieu::all();
    return response()->json($list,200);
   }
   public function gadgest(){
       $list =gadgests::all();
       return response()->json($list,200);
   }
   public function video(){
    $list =videos::all();
    return response()->json($list,200);
    }
    public function review(){
        $list =review::all();
        return response()->json($list,200);
    }
    public function binhluan($id){
        $list = binhluan::where('post_id',$id)
        ->get();
        return response()->json($list,200);
    }
    public function createbinhluan(Request $request){
        $user = binhluan::create([
            'name' => $request->name,
            'email' => $request->email,
            'web' => $request->web,
            'cmt'=>$request->cmt,
            'post_id'=>$request->post_id,
        ]);
        // return response()->json(['token'], 200);
        $user->save();

        // $token = $user->createToken('TutsForWeb')->accessToken;
 
        return response()->json(['token' => $request->name], 200);
    }
    public function detail(Request $request,$id){
        $list = dulieu::findOrFail($id);
        $list->view =$list->view +1;
        $list->save();
        return response()->json($list,200);
    }
    // check email
    public function forgot(Request $request){
        
        $data = $request->email;

        $drivers = User::where('email', $data)
        ->get('email');
        if($drivers){
            return response()->json([ 'data' => $drivers],200);
        }else {
                return response()->json(['error' => 'UnAuthorised'], 401);
            }
          
    }
    // đổi pass
    public function pass(Request $request){
        $drivers = User::where('email', $request->email)->first();

        $drivers->password = bcrypt($request->get('new-password'));
        // $user =User::create([
        //     'new-password' => $request->password,
        // ]);
        // $user->password = bcrypt($request->get('new-password'));
        $drivers->save();
        return response()->json(['token'=> $drivers],200);
       
    }
    public function reset(Request $request) {
        $credentials = [
            // 'email' => $request->email,
            'password' => $request->password
        ];
        if($credentials)
        {
            return response()->json(['sd'=>'dg'],200);
        }
    }
    public function page(Request $request){
     
        $page = dulieu::Orderby('id', 'desc')->paginate(5);
        // ->Orderby('id', 'desc')
        // ->get();
        
        return response()->json($page);
    }
    public function deleteprofile($id)
    {
        $data = contact::find($id);
        $data->trangthai = 0;
        
        $data->save();
        return response()->json(['token'=>'xoa thanh cong'],200);
    }
    
    public function topview()
    {
        $list = dulieu::where('view','>',5)
        ->take(3)
        ->get();
        //  $list=dulieu::Orderby('view', 'desc')
        // ->limit(5)
        // ->get();
        return response()->json($list,200);
    }
    public function timkiem(Request $request){
        $data = $request->category ;
        $timkiem = dulieu::where('category','like', "%{$data}%")
        ->paginate(3);
        // ->get();
        if($timkiem){
            return response()->json([ 'data' => $timkiem],200);
        }else {
                return response()->json(['error' => 'UnAuthorised'], 401);
            }
          
    }
    public function sort(Request $request){
        $data =dulieu::where('by','Technology')
        ->Orderby('view', 'desc')
        ->get();
        return response()->json($data,200);
    }
    public function design(Request $request){
        $data =dulieu::where('by','Design')
        ->Orderby('view', 'desc')
        ->get();
        return response()->json($data,200);
    }
    public function development(Request $request){
        $data =dulieu::where('by','Development')
        ->Orderby('view', 'desc')
        ->get();
        return response()->json($data,200);
    }
    public function post(Request $request){
        // $user = dulieu::create([
        //     'img' => $this->imageUpload($request->img),
        //     'title' => $request->title,
        //     'category' => $request->category,
        //     'by'=>$request->by,
        //     'createdDay'=>$request->createdDay,
        //     'createdBy'=>$request->createdBy,
        //     'view'=>$request->view,
        // ]);
        // $post->img=$this->imageUpload($request);
        $post = new dulieu();
        $post->img=$this->imageUpload($request);
        $post->category=$request->category;
        $post->title=$request->title;
        $post->by=$request->by;
        $post->createdDay=$request->createdDay;
        $post->createdBy=$request->createdBy;
        $post->view=$request->view;
        $post->use_id=$request->use_id;
        $post->trangthai=1;
        // echo  $post->img; die();
        $post->save();
 
        return response()->json(['token' => $request->title], 200);
    }
    public function edit(Request $request,$id){
        $post = dulieu::findOrFail($id );
        if($request->hasFile('img')){
            $post->img=$this->imageUpload($request);
        }
        $post->category=$request->category;
        $post->title=$request->title;
        $post->by=$request->by;
        $post->createdDay=$request->createdDay;
        $post->createdBy=$request->createdBy;
        $post->view=$request->view;
        $post->trangthai=1;
        $post->save();
        return response()->json($post,200);
    }
    public function imageUpload(Request $request)
    {
        if($request->hasFile('img')){
            if($request->file('img')->isValid()){
                $request->validate([
                    'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->img->extension();
                $request->img->move(public_path('images'),$imageName);
                return 'http://webquantri.test/images/' . $imageName;
            }
        }
        return '';
    }
    public function get_use(Request $request,$use_id){
        $post = dulieu::where('use_id',$use_id)
        ->get();
        return response()->json($post,200);
    }
    public function deletePost(Request $request,$id)
    {
        $data= dulieu::findOrFail($id);
        $data->delete();
        return response()->json(['token'=>"xóa thành công"],200);
    }

}
