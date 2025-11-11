@extends('backend.app')
@section('title', 'Edit Dynamic Page')
@section('page-content')

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="flex-wrap container-fluid d-flex flex-stack flex-sm-nowrap">
            <div class="flex-wrap d-flex flex-column align-items-start justify-content-center me-2">
                <h1 class="text-dark fw-bold fs-2">
                    @yield('title' ?? 'Dashboard')
                </h1>
                <ul class="breadcrumb fw-semibold fs-base" style="padding: 0 0 0 5px;">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">@yield('title' ?? 'Dashboard')</li>
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
                        <form method="POST" action="{{ route('dynamic_page.update', ['id' => $data->id]) }}">
                            @csrf

                            @php
                                $locales = ['en' => 'English', 'fr' => 'French', 'it' => 'Italian', 'de' => 'German'];
                            @endphp

                            <!-- Language Tabs -->
                            <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                                @foreach ($locales as $locale => $language)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link @if ($loop->first) active @endif"
                                            id="{{ $locale }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#{{ $locale }}-tab-pane" type="button" role="tab">
                                            {{ $language }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content border p-4 mt-3" id="languageTabsContent">
                                @foreach ($locales as $locale => $language)
                                    @php
                                        $translation = $data->translations->where('locale', $locale)->first();
                                    @endphp
                                    <div class="tab-pane fade @if ($loop->first) show active @endif"
                                        id="{{ $locale }}-tab-pane" role="tabpanel">

                                        <div class="mt-4 input-style-1">
                                            <label for="page_title_{{ $locale }}">Title
                                                ({{ strtoupper($locale) }})
                                            </label>
                                            <input type="text" id="page_title_{{ $locale }}" class="form-control"
                                                name="translations[{{ $locale }}][page_title]"
                                                placeholder="Enter Title in {{ $language }}"
                                                value="{{ old('translations.' . $locale . '.page_title', $translation->page_title ?? '') }}" />
                                        </div>

                                        <div class="mt-4 input-style-1">
                                            <label for="page_content_{{ $locale }}">Content
                                                ({{ strtoupper($locale) }})</label>
                                            <textarea id="summernote_{{ $locale }}" name="translations[{{ $locale }}][page_content]"
                                                class="form-control" rows="5" placeholder="Write content in {{ $language }}">{{ old('translations.' . $locale . '.page_content', $translation->page_content ?? '') }}</textarea>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-4 col-12">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                                <a href="{{ route('dynamic_page.index') }}" class="btn btn-danger btn-lg me-2">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
