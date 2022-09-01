@extends('layouts.master')

@section('page_header')
    Create Task
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form id="create" role="form" action="{{route('task.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                            <input class="form-control tab-child" type="text" name="title" value="{{old('title')}}" placeholder="Title">
                            @error('title')
                            <div style="background:transparent;margin:0;padding:0" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <input class="form-control tab-child" type="text" name="description" value="{{old('description')}}" placeholder="Description">
                            @error('description')
                            <div style="background:transparent;margin:0;padding:0" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label class="form-control-label">Assigned To: <span class="tx-danger">*</span></label>
                            <select class="form-control select2 tab-child" id="user_id" name="assigned_to_id">
                                <option selected disabled>Choose user</option>
{{--                                @foreach($users as $user)--}}
{{--                                    <option value="{{$user->id}}">{{$user->name}}</option>--}}
{{--                                @endforeach--}}
                            </select>
                            @error('assigned_to_id')
                            <div style="background:transparent;margin:0;padding:0" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" value="Save Task" onclick="submitform()">
{{--                    <button type="button" onclick='submitform()' class="btn btn-info">Save Task</button>--}}
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>


@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>

        function submitform()
        {
            var check = validate();
            if(check==true)
            {
                $('#create').submit();
            }
        }


        $('input,textarea').keyup(function(event){
            $(this).css('border',"1px solid green");
        });

        $('input,select').change(function(event){
            $(this).css('border',"1px solid green");
        });


        function validate()
        {
            var x,y,i,check=true;
            x = document.getElementsByClassName("tab-child");
            console.log($(x[1]).val().length);
            for (i = 0; i < x.length; i++)
            {
                if($(x[i]).val().length==0)
                {
                    $(x[i]).css("border","1px solid red");
                    check=false
                }
            }

            return check;

        }

        {{--$('#user_id').select2(select2Ajax('{{ route('get-users') }}'))--}}
        $('#user_id').select2({
            ajax: {
                url: '{{route('get-users')}}',
                dataType: 'json',
                data: function (params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1
                    }

                    // Query parameters will be ?search=[term]&page=[page]
                    return query;
                },
                processResults: function (data) {

                    return {
                        results: data[0]
                    };
                }
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });
    </script>
@endsection
