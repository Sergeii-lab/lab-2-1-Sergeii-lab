<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function show($id) {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
    public function delete($id) {
        $post = Post::find($id);
        if ($post) {
           $post->delete();
        }
       return redirect()->route('posts.index');
    }
    public function edit($id) {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id) {
        $post = Post::find($id);
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        $data = $request->all();
	    $post -> title = $data['title'];
        $post ->content =  $data['content'];
	    $post->save();
        return redirect()->route('posts.index');

    }
}
