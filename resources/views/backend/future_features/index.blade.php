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
                <h4>Feature #{{ $feature->id }}</h4>
                <input type="hidden" name="features[{{ $feature->id }}][id]" value="{{ $feature->id }}">

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="features[{{ $feature->id }}][image]" class="form-control">
                    @if ($feature->image)
                        <img src="{{ asset($feature->image) }}" width="100" class="mt-2">
                    @endif
                </div>

                @php
                    $locales = ['en' => 'English', 'fr' => 'French', 'it' => 'Italian', 'de' => 'German'];
                @endphp

                @foreach ($locales as $localeCode => $localeName)
                    <div class="border p-3 mt-3">
                        <h5>{{ $localeName }} ({{ $localeCode }})</h5>

                        @php
                            $translation = $feature->translation($localeCode);
                        @endphp

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text"
                                name="features[{{ $feature->id }}][translations][{{ $localeCode }}][title]"
                                value="{{ old('features.' . $feature->id . '.translations.' . $localeCode . '.title', $translation->title ?? '') }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Features (comma separated)</label>
                            <textarea name="features[{{ $feature->id }}][translations][{{ $localeCode }}][features]" class="form-control"
                                rows="3">{{ old('features.' . $feature->id . '.translations.' . $localeCode . '.features', $translation->features ?? '') }}</textarea>
                        </div>
                    </div>
                @endforeach

            </div>
        @endforeach

        <button type="submit" class="btn btn-success">Update All</button>
    </form>
@endsection
