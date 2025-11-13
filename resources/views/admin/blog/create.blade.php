@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <card-header>
            <h5>{{ $title ?? '' }}</h5>
        </card-header>
    </div>
    <div class="card-body">
        <form action="{{route('blog.store')}}"
        method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Blog</label>
                <select name="category_id" class="form-control">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter blog title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="summernote" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
@endsection
