@extends('backend.app')
@section('title', 'Add New Software Fee')
@section('page-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3 card">
                    <form action="{{ route('backend.software_fees.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-style">
                            <h6 class="mb-4">Software Fee Details</h6>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Enter Price">
                            </div>

                            <ul class="nav nav-tabs mb-3" id="languageTabs" role="tablist">
                                @foreach ($languages as $lang)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                            id="{{ $lang }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#{{ $lang }}" type="button"
                                            role="tab">{{ strtoupper($lang) }}</button>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="tab-content">
                                @foreach ($languages as $lang)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                        id="{{ $lang }}" role="tabpanel">
                                        <div class="mb-3">
                                            <label class="form-label">Title ({{ strtoupper($lang) }})</label>
                                            <input type="text" name="title_{{ $lang }}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description ({{ strtoupper($lang) }})</label>
                                            <textarea id="summernote" name="description_{{ $lang }}" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-success">Save</button>
                                <a href="{{ route('backend.software_fees.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
