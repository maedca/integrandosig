<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\PostStoreRequest;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostUpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate(5);

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {

        $post = Post::create($request->all());
//       dd($request);

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }

        $post->tags()->attach($request->get('tags'));

        Alert::toast('Entrada creda con éxito', 'success', 'top-right');
        return redirect()->route('posts.index');
//        return redirect()->route('posts.edit', $category->id)
//            ->with('info', 'Etiqueta creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('pass', $post);
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('pass', $post);
        $categories = Category::orderBy('name', 'ASC')->get();
//        dd($categories);
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('pass', $post);
        $post->fill($request->all())->save();

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }

        $post->tags()->sync($request->get('tags'));


        Alert::toast('Entrada actualizada con éxito', 'success', 'top-right');
        return redirect()->route('posts.index');
//        return redirect()->route('posts.index', $category->id)
//            ->with('info', 'Etiqueta Actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=  Post::find($id);
        $this->authorize('pass', $post);
        $post->delete();
        Alert::toast('Entrada eliminada correctamente', 'success', 'top-right');
        return back();
    }
}

