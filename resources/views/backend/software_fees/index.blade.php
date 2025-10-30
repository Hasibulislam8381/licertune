@extends('backend.app')
@section('title', 'Software Fees')
@section('page-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3 card">
                    <div class="card-style mb-30">
                        <div class="mb-4 d-flex justify-content-start">
                            <a href="{{ route('backend.software_fees.create') }}" class="btn btn-primary btn-lg">Add New
                                Fee</a>
                        </div>
                        <div class="table-wrapper table-responsive">
                            <table id="data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
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
            if (!$.fn.DataTable.isDataTable('#data-table')) {
                $('#data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('backend.software_fees.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'price',
                            name: 'price'
                        },
                        {
                            data: 'description',
                            name: 'description'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                });
            }
        });

        // Status Toggle
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
                if (result.isConfirmed) {
                    let url = '{{ route('backend.software_fees.status', ':id') }}';
                    $.get(url.replace(':id', id), function(resp) {
                        $('#data-table').DataTable().ajax.reload();
                        toastr[resp.success ? 'success' : 'error'](resp.message);
                    });
                }
            });
        }

        // Delete
        function showDeleteConfirm(id) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to delete this record?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = '{{ route('backend.software_fees.destroy', ':id') }}';
                    $.ajax({
                        url: url.replace(':id', id),
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(resp) {
                            $('#data-table').DataTable().ajax.reload();
                            toastr.success(resp.message);
                        }
                    });
                }
            });
        }
    </script>
@endpush
