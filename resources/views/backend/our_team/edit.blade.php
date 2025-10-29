@extends('backend.app')
@section('title', 'Edit Team Member')
@section('page-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="p-3 card">
                    <div class="card-style">
                        <h6 class="mb-3 fw-bold">Edit Team Member</h6>

                        <form action="{{ route('backend.our_team.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

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

                            @foreach ($languages as $lang)
                                <h6 class="mt-4">Translations ({{ strtoupper($lang) }})</h6>

                                <div class="mb-3">
                                    <label for="name_{{ $lang }}" class="form-label">Name
                                        ({{ strtoupper($lang) }})
                                    </label>
                                    <input type="text" name="name_{{ $lang }}" id="name_{{ $lang }}"
                                        class="form-control"
                                        value="{{ old('name_' . $lang, $translations[$lang]['name'] ?? '') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="bio_{{ $lang }}" class="form-label">Bio
                                        ({{ strtoupper($lang) }})</label>
                                    <textarea name="bio_{{ $lang }}" id="bio_{{ $lang }}" class="form-control" rows="4">{{ old('bio_' . $lang, $translations[$lang]['bio'] ?? '') }}</textarea>
                                </div>
                            @endforeach

                            <div class="d-flex justify-content-end mt-4">
                                <a href="{{ route('backend.our_team.index') }}" class="btn btn-secondary me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Member</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
