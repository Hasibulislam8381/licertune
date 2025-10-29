@extends('backend.app')
@section('title', 'Edit CMS Section')
@section('page-content')

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="flex-wrap container-fluid d-flex flex-stack flex-sm-nowrap">
            <div class="flex-wrap d-flex flex-column align-items-start justify-content-center me-2">
                <h1 class="text-dark fw-bold fs-2">@yield('title') <small class="text-muted fs-6 fw-normal ms-1"></small>
                </h1>
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
                        <form method="POST" action="{{ route('backend.cms.update', ['id' => $cms->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                          

                            <div class="mt-4 input-style-1">
                                <label for="page_name">Page Name:</label>
                                <input type="text" placeholder="Enter Page Name" id="page_name"
                                    class="form-control @error('page_name') is-invalid @enderror" name="page_name"
                                    value="{{ old('page_name', $cms->page_name) }}" />
                                @error('page_name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mt-4 input-style-1">
                                <label for="section_name">Section Name:</label>
                                <input type="text" placeholder="Enter Section Name" id="section_name"
                                    class="form-control @error('section_name') is-invalid @enderror" name="section_name"
                                    value="{{ old('section_name', $cms->section_name) }}" />
                                @error('section_name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            @foreach ($languages as $lang)
                                <h5 class="mt-4">Translations ({{ strtoupper($lang) }})</h5>

                                <div class="mt-2 input-style-1">
                                    <label for="title_{{ $lang }}">Title:</label>
                                    <input type="text" placeholder="Enter Title" id="title_{{ $lang }}"
                                        class="form-control" name="title_{{ $lang }}"
                                        value="{{ old('title_' . $lang, $translations[$lang]['title'] ?? '') }}" />
                                </div>

                                <div class="mt-2 input-style-1">
                                    <label for="sub_title_{{ $lang }}">Sub Title:</label>
                                    <input type="text" placeholder="Enter Sub Title" id="sub_title_{{ $lang }}"
                                        class="form-control" name="sub_title_{{ $lang }}"
                                        value="{{ old('sub_title_' . $lang, $translations[$lang]['sub_title'] ?? '') }}" />
                                </div>

                                <div class="mt-2 input-style-1">
                                    <label for="description_{{ $lang }}">Description:</label>
                                    <textarea placeholder="Type here..." id="description_{{ $lang }}" class="form-control"
                                        name="description_{{ $lang }}">{{ old('description_' . $lang, $translations[$lang]['description'] ?? '') }}</textarea>
                                </div>

                                <div class="mt-2 input-style-1">
                                    <label for="sub_description_{{ $lang }}">Sub Description:</label>
                                    <textarea placeholder="Type here..." id="sub_description_{{ $lang }}" class="form-control"
                                        name="sub_description_{{ $lang }}">{{ old('sub_description_' . $lang, $translations[$lang]['sub_description'] ?? '') }}</textarea>
                                </div>
                                <hr>
                            @endforeach

                            <div class="mt-4 input-style-1">
                                <label for="image">Image:</label>
                                <input type="file" id="image" class="form-control" name="image" />
                                @if ($cms->image)
                                    <img src="{{ asset($cms->image) }}" alt="Image" class="mt-2"
                                        style="max-height:100px;">
                                @endif
                            </div>

                            <div class="mt-4 input-style-1">
                                <label for="bg_image">Background Image:</label>
                                <input type="file" id="bg_image" class="form-control" name="bg_image" />
                                @if ($cms->bg_image)
                                    <img src="{{ asset($cms->bg_image) }}" alt="Background" class="mt-2"
                                        style="max-height:100px;">
                                @endif
                            </div>

                            <div class="mt-4 input-style-1">
                                <label for="btn_text">Button Text:</label>
                                <input type="text" id="btn_text" class="form-control" name="btn_text"
                                    value="{{ old('btn_text', $cms->btn_text) }}" />
                            </div>

                            <div class="mt-4 input-style-1">
                                <label for="btn_url">Button URL:</label>
                                <input type="text" id="btn_url" class="form-control" name="btn_url"
                                    value="{{ old('btn_url', $cms->btn_url) }}" />
                            </div>

                            <div class="mt-4 input-style-1">
                                <label for="status">Status:</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="active"
                                        {{ old('status', $cms->status) == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive"
                                        {{ old('status', $cms->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="mt-4 col-12">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                                <a href="{{ route('backend.cms.index') }}" class="btn btn-danger btn-lg me-2">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
