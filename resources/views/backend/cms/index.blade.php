@extends('backend.app')
@section('title', 'CMS Sections')
@section('page-content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="flex-wrap container-fluid d-flex flex-stack flex-sm-nowrap">
            <div class="flex-wrap d-flex flex-column align-items-start justify-content-center me-2">
                <h1 class="text-dark fw-bold fs-2">
                    @yield('title') <small class="text-muted fs-6 fw-normal ms-1"></small>
                </h1>
                <ul class="breadcrumb fw-semibold fs-base" style="padding: 0 0 0 5px;">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        @yield('title')
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3 card">
                    <div class="card-style mb-30">
                        <div class="mb-4 d-flex justify-content-start">
                            <a href="{{ route('backend.cms.create') }}" class="btn btn-primary btn-lg">Add New CMS
                                Section</a>
                        </div>
                        <div class="table-wrapper table-responsive">
                            <table id="data-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Page Name</th>
                                        <th>Section Name</th>
                                        <th>Title (EN)</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Dynamic Data via DataTable --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });

            if (!$.fn.DataTable.isDataTable('#data-table')) {
                let dTable = $('#data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('backend.cms.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'page_name',
                            name: 'page_name'
                        },
                        {
                            data: 'section_name',
                            name: 'section_name'
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            orderable: true,
                            searchable: false
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                    order: [],
                    responsive: true,
                    language: {
                        processing: `<div class="text-center">
                        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span></div></div>`
                    }
                });
            }

            // Status toggle
            function showStatusChangeAlert(id) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You want to update the status?',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) statusChange(id);
                });
            }

            function statusChange(id) {
                let url = '{{ route('backend.cms.status', ':id') }}';
                $.post(url.replace(':id', id), {}, function(resp) {
                    $('#data-table').DataTable().ajax.reload();
                    toastr.success(resp.message);
                });
            }

            // Delete confirmation
            function showDeleteConfirm(id) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure you want to delete this record?',
                    text: 'It will be gone forever!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                }).then((result) => {
                    if (result.isConfirmed) deleteItem(id);
                });
            }

            function deleteItem(id) {
                let url = '{{ route('backend.cms.destroy', ':id') }}';
                $.ajax({
                    type: "DELETE",
                    url: url.replace(':id', id),
                    success: function(resp) {
                        $('#data-table').DataTable().ajax.reload();
                        toastr.success(resp.message);
                    }
                });
            }

            // Expose functions globally
            window.showStatusChangeAlert = showStatusChangeAlert;
            window.showDeleteConfirm = showDeleteConfirm;
            window.statusChange = statusChange;
            window.deleteItem = deleteItem;
        });
    </script>
@endpush
