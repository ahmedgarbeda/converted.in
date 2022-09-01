@extends('layouts.master')

@section('page_header')
    Tasks
@endsection
@section('content')

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h6 class="br-section-label">Tasks</h6>
                </div>

                    <div class="col-lg-6">
                        <a href="{{route('task.create')}}" class="btn btn-primary float-left" >Create Task</a>
                    </div>
            </div>
            <br>


            <div class="table-wrapper">
                <div id="datatable1_wrapper" class="dataTables_wrapper no-footer">
                    <table id="tasksTable" class="table   dataTable collapsed" >
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>User</th>
                            <th>Admin</th>
{{--                            <th>Actions</th>--}}
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection


@section('js')
    <script>
        // $('#datatable1').DataTable({
        //     responsive: false,
        //     language: {
        //         searchPlaceholder: 'Search...',
        //         sSearch: '',
        //         lengthMenu: '_MENU_ items/page',
        //     }
        // });

        $(document).ready(function () {
            dt();
        });

        function dt() {
            let dtvar = $('#tasksTable').DataTable({
                dom: 'lBfrtip',
                buttons: [

                ],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "processing": true,
                // "scrollX": true,
                // 'autoWidth': false,
                "serverSide": true,
                "ajax": {
                    "url": "{{ url('datatables/tasks') }}",
                    "type": "GET",
                },
                "order": [[0, "desc"]],
                "columns": [
                    {data: 'title', name: 'title'},
                    {data: 'description', name: 'description'},
                    {data: 'user', name: 'user'},
                    {data: 'admin', name: 'admin'},
                ]
            });
            return dtvar;
        }
        {{--function confirmDelete(id){--}}
        {{--    Swal.fire({--}}
        {{--        title: "{{ __('commonmodule::admin.delete_warn') }}",--}}
        {{--        text: "{{ __('usermodule::admin.delete_employee_confirm') }}",--}}
        {{--        icon: 'warning',--}}
        {{--        showCancelButton: true,--}}
        {{--        confirmButtonColor: '#3085d6',--}}
        {{--        cancelButtonColor: '#d33',--}}
        {{--        confirmButtonText: "{{ __('commonmodule::admin.yes') }}",--}}
        {{--        cancelButtonText: "{{ __('commonmodule::admin.no') }}",--}}
        {{--    }).then((result) => {--}}
        {{--        if (result.value) {--}}
        {{--            $('#deleteForm'+id).submit();--}}
        {{--        }--}}
        {{--    })--}}
        {{--    return false--}}
        {{--}--}}

    </script>

@endsection
