<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=users::all();
        return view('/dwda',['users'=>$users] );

        // $posts= Post::select('id','title','postbody')->orderBy('id','ASC')->get();
        // return view('admin.posts.allposts',compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.creatpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

        request()->validate([
            'name'=>   'required',
            'email'=>  'required',
        ]);



        $request->create([
            'name'=>request('name'),
            'email'=>request('email'),
        ]);
        return redirect()->back();

        // $user=User::create($request->all());

        // $user = User::create([
        // 'first_name' => 'Taylor',
        // 'last_name' => 'Otwell',
        // 'title' => 'Developer',
        // ]);



        // ++++++++++++++++++++++++++++++++$req++++++++++++++++++++++
        // Post::create([
        //     'title' => $req->title,
        //     'postbody' => $req->postbody ,
        // ]);
        // return redirect()->route('/posts')->with(['success'=>'post created seccessfuly']) ;

        //      $offer=new Offer;
        // $offer->name=$req->name;
        // $offer->lastname=$req->lastname;
        // $offer->save();

        // return view('welcome',$req);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $check=Post::find($id);
        if(!$check)
            return  redirect()->back();
        $post_info= Post::select('id','title','postbody')->find(id);
         return view('admin.posts.editpostinfo',compact('post_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $check=Post::find($id);
        if(!$check)
            return  redirect()->back();
        $post_info= Post::select('id','title','postbody')->find(id);

        return view('admin.posts.editpostinfo',compact('post_info'));
        // return view('/edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name'=>   'required',
            'email'=>  'required',
        ]);

        $request->update([
            'name'=>request('name'),
            'email'=>request('email'),
        ]);
        return redirect()->back();


        //  $user=Post::find($post_id);
        // if(!$user)
        //     return  redirect()->back();
        // $user->update([
        //     'title' => $req->title,
        //     'postbody' => $req->postbody,
        // ]);
        // return redirect()->back()->with(['success'=>'update successful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        request()->delete();

        return redirect('/');



        //  $user=Post::find($post_id);
        // if(!$user)
        //     return  redirect()->back();

        // $user->delete();
        // return redirect()->route('/posts');
    }
}
