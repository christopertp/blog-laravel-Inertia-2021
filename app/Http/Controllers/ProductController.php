<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use Inertia\Inertia;


class ProductController extends Controller
{
    
    public function __construct()
    {
        Inertia::setRootView('product');
    }
    
    public function index()
    {
        // $posts = Product::activePost()
        //     ->with('user:id,name')
        //     // ->with('categories:slug,name')
        //     ->orderBy('published_at', 'desc')
        //     ->get();

        
        $posts = Product::with('user:id,name')
            // ->with('categories:slug,name')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

          $place = ['featured_image' => './assets/Thinbed/TB FP.png', 'country' =>'Nepal'];
          $object = (object) $place;


          // var_dump($posts);


          echo data_get($posts, 'total');
          echo $posts->total;
          dd($posts);
          foreach($posts as $user) {
            dd($user);
        }
          dd($posts);
        // return Inertia::render('Product/Index', ['posts' => $posts]);

    }

    // public function show($slug)
    // {
    //     $post = Post::activePost()
    //         ->with('user:id,name')
    //         ->with('categories:slug,name')
    //         ->with('tags:slug,name')
    //         ->where('slug', $slug)
    //         ->firstOrFail();

    //     return Inertia::render('Blog/Show', [
    //         'post' => $post,
    //         'nextPost' => $post->next_post,
    //         'prevPost' => $post->prev_post,
    //     ]);
    // }

    // public function user($userId)
    // {
    //     $posts = Post::activePost()
    //         ->where('user_id', $userId)
    //         ->with('user:id,name')
    //         ->with('categories:slug,name')
    //         ->get();

    //     return Inertia::render('Blog/Index', ['posts' => $posts]);
    // }

    // public function category($slug)
    // {
    //     $posts = Post::activePost()
    //         ->whereHas('categories', function (Builder $query) use ($slug) {
    //             $query->where('slug', $slug);
    //         })
    //         ->with('user:id,name')
    //         ->with('categories:slug,name')
    //         ->get();

    //     return Inertia::render('Blog/Index', ['posts' => $posts]);
    // }

    // public function tag($slug)
    // {
    //     $posts = Post::activePost()
    //         ->whereHas('tags', function (Builder $query) use ($slug) {
    //             $query->where('slug', $slug);
    //         })
    //         ->with('user:id,name')
    //         ->with('categories:slug,name')
    //         ->get();

    //     return Inertia::render('Blog/Index', ['posts' => $posts]);
    // }
}
