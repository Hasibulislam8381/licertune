@extends('backend.app')
@section('title', 'Add Team Member')
@section('page-content')

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="flex-wrap container-fluid d-flex flex-stack flex-sm-nowrap">
            <div class="flex-wrap d-flex flex-column align-items-start justify-content-center me-2">
                <h1 class="text-dark fw-bold fs-2">@yield('title')</h1>
                <ul class="breadcrumb fw-semibold fs-base" style="padding: 0 0 0 5px;">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">@yield('title')</li>
                </ul>
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4 card-style">
                    <div class="card card-body">
                        <form method="POST" action="{{ route('backend.our_team.store') }}" enctype="multipart/form-data">
                            @csrf

                            @php
                                $languages = ['en' => 'English', 'fr' => 'French', 'it' => 'Italian', 'de' => 'German'];
                            @endphp

                            @foreach ($languages as $langCode => $langName)
                                <h5 class="mt-4">{{ $langName }} Translation</h5>

                                <div class="mt-2 input-style-1">
                                    <label for="name_{{ $langCode }}">Name ({{ $langName }}):</label>
                                    <input type="text" id="name_{{ $langCode }}" class="form-control"
                                        name="translations[{{ $langCode }}][name]"
                                        value="{{ old('translations.' . $langCode . '.name') }}" required>
                                </div>

                                <div class="mt-2 input-style-1">
                                    <label for="bio_{{ $langCode }}">Bio ({{ $langName }}):</label>
                                    <textarea id="bio_{{ $langCode }}" class="form-control" rows="3"
                                        name="translations[{{ $langCode }}][bio]">{{ old('translations.' . $langCode . '.bio') }}</textarea>
                                </div>

                                <hr>
                            @endforeach

                            <!-- Common Image Field -->
                            <div class="mt-4 input-style-1">
                                <label for="image">Image:</label>
                                <input type="file" id="image" class="form-control" name="image">
                            </div>
                            <div class="mt-4 input-style-1">
                                <label for="status">Status:</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>

                            <div class="mt-4 col-12">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                <a href="{{ route('backend.our_team.index') }}"
                                    class="btn btn-danger btn-lg me-2">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
