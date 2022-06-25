<?php

namespace App\Http\Controllers;

use App\Models\WordList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PagesController extends Controller
{
    //HomePage

    public function index()
    {
        $trends = WordList::inRandomOrder()
            ->limit(20)
            ->get();
        $featured_posts = Post::where('featured', true)->limit(4)->get();
        return view('pages.index')->with('trends', $trends)->with('featured_post', $featured_posts);
    }

    //Search Result
    public function search(Request $request)
    {
        $word = $request->word;
        $results = WordList::where('word', $word)->get();
        return view('pages.search')->with('results', $results);
    }

    //Blog Page
    public function blog()
    {
        $posts = Post::where('status', 'PUBLISHED')->paginate(5);
        $recent_posts = Post::where('status', 'PUBLISHED')->whereDate('created_at', '<', Carbon::now()->subDay())
            ->get();

        return view('pages.blog.index')->with('posts', $posts)->with('recent_posts', $recent_posts);
    }

    public function view_blog($slug)
    {
        $posts = Post::where('slug', $slug)->get();
        $recent_posts = Post::where('status', 'PUBLISHED')->whereDate('created_at', '<', Carbon::now()->subDay())
            ->get();

        return view('pages.blog.view')->with('posts', $posts)->with('recent_posts', $recent_posts);

    }

    public function list_of_words()
    {
        $letter = \request('letter');
        $results = WordList::where('word', 'like', $letter . '%')->simplePaginate(50);
        return view('pages.list')->with('letter', $letter)->with('results', $results);
    }


}
