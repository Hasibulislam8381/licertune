@extends('backend.app')
@section('title', 'Edit Future Features')
@section('page-content')
    <h1>Edit Future Features</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('backend.future_features.update-all') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @foreach ($features as $feature)
            <div class="card mb-4 p-3">
                <h4>{{ $feature->title }}</h4>
                <input type="hidden" name="features[{{ $feature->id }}][id]" value="{{ $feature->id }}">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="features[{{ $feature->id }}][title]"
                        value="{{ old('features.' . $feature->id . '.title', $feature->title) }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="features[{{ $feature->id }}][image]" class="form-control">
                    @if ($feature->image)
                        <img src="{{ asset($feature->image) }}" width="100" class="mt-2">
                    @endif
                </div>

                <div class="form-group">
                    <label>Features (comma separated)</label>
                    <textarea name="features[{{ $feature->id }}][features]" class="form-control" rows="3">{{ old('features.' . $feature->id . '.features', $feature->features) }}</textarea>
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-success">Update All</button>
    </form>
@endsection
