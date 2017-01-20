<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
use Purifier;
use Image;
use Auth;
use Mail;
use App\User;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->where('email',Auth::user()->email)->paginate(10);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'title'         => 'required|max:255',
                'body'          => 'required'
            ));

        // store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->body = Purifier::clean($request->body);
        $post->email = Auth::user()->email;
        

        
        if(Auth::user()->approval == 'false'){
            $post->status = 'pending';
            $post->save();

            $post_details = Post::find($post->id);

            $bodyMessage = 'Title: '.$post->title.'\n'.'Description: '.$post->body;
        $data = array(
            'email' => $request->email,
            'subject' => $post_details->title,
            'bodyMessage' => $post_details->body,
            'post_id' => $post_details->id,
            'created_at' => $post_details->created_at,
            'updated_at' => $post_details->updated_at,
            );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from('fulsuccess9@gmail.com');
            $message->to($data['email']);
            $message->subject($data['subject']);
        });

        User::where('email', Auth::user()->email)->update(['approval' => 'true']);

        }else{
            $post->status = 'approved';
            $post->save();
        }

        Session::flash('success', 'You job was successfully saved!');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $post = Post::find($id);

        // return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post);

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
    public function update(Request $request, $id)
    {
        // Validate the data
        $post = Post::find($id);


        $this->validate($request, array(
                'title' => 'required|max:255',
                'body'  => 'required'
            ));

        // Save the data to the database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = Purifier::clean($request->input('body'));
        $post->email = Auth::user()->email;

        $post->save();


        // set flash data with success message
        Session::flash('success', 'Your job was successfully saved.');

        // redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'The Job was successfully deleted.');
        return redirect()->route('posts.index');
    }
}
