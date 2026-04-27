<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Psy\CodeCleanerAware;

class PostController extends Controller
{
    public function postsIndex()
    {   
        $posts = Post::get(); 
        $posts = Post::paginate(perPage:9); 
        
        return view("posts.index", compact('posts'));
    }

    public function postShow($id)
    {
        $post = Post::findOrFail($id);
        
        return view("posts.show", compact('post'));
    }

    // public function postsIndex()
    // {   
    //     $posts = $this-> getPosts();
    //     return view("posts.index", compact('posts'));
    // }
    // public function postShow(Request $request)
    // {
    //     $post_number = $request->number;
    //     $news = $this-> getPosts();
    //     $post = $news[$post_number];
    //     return view("posts.first",['post'=>$post]);
    // }
    
    // public function getPosts(){
    //     $posts = [
    //         1 =>[
    //             "num" => 1,
    //             "title" => "Yazylshyklar bashlady",
    //             "content" => "Lorem ipsum dolor sit amet consectetur.",
    //             "img" => "/img/blog-post-2.jpg",
    //             "view_count" => 1560,
    //             "author" => "Aman Amanow",
    //             "date" => "01.02.2026",
    //             "href" => "show/1",
    //         ],
    //         2 => [
    //             "num" => 2,
    //             "title" => "Synag wagty yakynlady!",
    //             "content" => "Lorem ipsum dolor sit amet consectetur.",
    //             "img" => "/img/image.jpg",
    //             "view_count" => 4000,
    //             "author" => "Myrat Meredow",
    //             "date" => "01.04.2026",
    //             "href" => "show/2",
    //         ],
    //         3 => [
    //             "num" => 3,
    //             "title" => "Taze tazelikler",
    //             "content" => "Lorem ipsum dolor sit amet consectetur.",
    //             "img" => "/img/travel-2.jpg",
    //             "view_count" => 3100,
    //             "author" => "Jeren Hanmyradowa",
    //             "date" => "04.04.2026",
    //             "href" => "show/3",
    //         ],
    //     ];
    //     return $posts;
    // }
}
// https://github.com/han-pv/NokatNews.git
