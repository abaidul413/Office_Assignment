<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ModeratorController extends Controller
{
    public function getPost($id){
    	$post = Post::find($id);
    	return view('moderator.post')->withPost($post);
    }

    /**
     * @param $id
     *
     * Post to spam
     */
    public function markSpam($id)
    {
        $post = Post::find($id);
        Post::where('id', $id)->update(['status' => 'spam']);
    }

    /**
     * @param $id
     *
     * Post Aprove
     */
    public function approvePost($id){
    	$post = Post::find($id);
    	Post::where('id',$id)->update(['status' => 'approved']);
    }
}
