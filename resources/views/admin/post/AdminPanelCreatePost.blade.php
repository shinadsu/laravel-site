@extends('admin.dashboard')
@section('content')
<form action="{{ route('admin.StoreInDatabaseController') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Default title input example</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="title">
    </div>
    <div class="mb-3">
        <label for="likes" class="form-label">Default likes input example</label>
        <input type="text" name="likes" class="form-control" id="likes" placeholder="likes">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Default content input example</label>
        <textarea type="text" name="content" class="form-control" id="content" placeholder="content"></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Default file input example</label>
        <input type="file" name="image" class="form-control" id="image">
      </div>    
    <div class="form-group">
        <select class="form-select" aria-label="Default select example" id="category" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection