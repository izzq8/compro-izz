<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;
use Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Blog::with('category')->get();
        $title = "Data User";
        return view('admin.blog.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create New User";
        $categories = Categories::get();
        return view('admin.blog.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::create($request->all());

        Alert::success('Success!', 'User created successfully');

        return redirect()->to('admin/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Blog::find($id);
        $categories = Categories::get();
        $title = "Edit Blog";
        return view('admin.blog.edit', compact('edit', 'title', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Blog::find($id);
        $update -> category_id = $request->category_id;
        $update -> title = $request->title;
        $update -> content = $request->content;
        $update -> slug = Str::slug($request->title);

        $update -> save();

        Alert::success('Success!', 'User updated successfully');


        return redirect()->to('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::find($id)->delete();
        Alert::success('Success Title', 'Success Message');


        return redirect()->to('admin/blog');
    }
}
