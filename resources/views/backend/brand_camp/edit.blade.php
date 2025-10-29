@extends('backend.app')
@section('title', 'Edit BrandCamp Section')
@section('page-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="p-3 card">
                    <div class="card-style">
                        <h6 class="mb-3 fw-bold">Edit BrandCamp Section</h6>
                        <form action="{{ route('backend.brand_camp.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- Page Name -->
                            <div class="mb-3">
                                <label for="page_name" class="form-label">Page Name</label>
                                <input type="text" name="page_name" id="page_name" class="form-control"
                                    value="{{ old('page_name', $data->page_name) }}">
                                @error('page_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            @foreach ($languages as $lang)
                                <h5 class="mt-3 mb-2">{{ strtoupper($lang) }} Content</h5>
                                <div class="mb-3">
                                    <label for="title_{{ $lang }}" class="form-label">Title</label>
                                    <input type="text" name="translations[{{ $lang }}][title]"
                                        id="title_{{ $lang }}" class="form-control"
                                        value="{{ old("translations.$lang.title", $translations[$lang]['title'] ?? '') }}">
                                    @error("translations.$lang.title")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="subtitle_{{ $lang }}" class="form-label">Subtitle</label>
                                    <input type="text" name="translations[{{ $lang }}][subtitle]"
                                        id="subtitle_{{ $lang }}" class="form-control"
                                        value="{{ old("translations.$lang.subtitle", $translations[$lang]['subtitle'] ?? '') }}">
                                    @error("translations.$lang.subtitle")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description_{{ $lang }}" class="form-label">Description</label>
                                    <textarea name="translations[{{ $lang }}][description]" id="description_{{ $lang }}"
                                        class="form-control" rows="4">{{ old("translations.$lang.description", $translations[$lang]['description'] ?? '') }}</textarea>
                                    @error("translations.$lang.description")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endforeach

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                @if ($data->image)
                                    <img src="{{ asset($data->image) }}" width="100" class="mt-2">
                                @endif
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('backend.brand_camp.index') }}" class="btn btn-secondary me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Section</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
