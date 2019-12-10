@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-11 connectedSortable">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default-assign">
            <span class="fa fa-exchange"></span> Place Students
        </button>
        <br><br>

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Student</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($placements as $placement)
                                <tr>
                                    <td>{{$placement->name}}</td>
                                    <td>{{$placement->address}}</td>
                                    <td>{{$placement->phone}}</td>
                                    <td>{{$placement->location->name}}</td>

                                    <td><a href="{{ route('placement.edit',$placement->id) }}"><span
                                                class="fa fa-edit fa-2x text-primary"></span></a></td>
                                    <td>
                                        <form id="delete-form-{{$placement->id}}" style="display: none"
                                            action="{{ route('placement.destroy',$placement->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$placement->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-trash fa-2x text-danger"></span>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>

                                    <th>Phone</th>
                                    <th>Location</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>


        {{-- Data input modal area for project allocation --}}
        <div class="modal fade" id="modal-default-assign">
            <div class="modal-dialog">

                <form action="#" method="post">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span class="fa fa-exchange"></span> Make Placement</h4>
                        </div>
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="">Company <b style="color: red;">*</b></label>
                                <select class="form-control" name="itcompany_id">
                                    <option selected="disabled">Select Company</option>
                                    @foreach ($companies as $company)
                                    <option value="{{$company->id}}">
                                        {{$company->name}}
                                    </option>
                                    @endforeach

                                </select>
                            </div>



                            <div class="form-group">
                                <label> Registered Students <b style="color: red;">*</b> </label>

                                <select class="form-control select2" multiple="multiple"
                                    data-placeholder="Select Students" style="width: 100%;" name="user_id[]">

                                    @foreach ($students as $user)
                                    <option value="{{$user->id}}">
                                        {{$user->lastname.' '.$user->firstname.' - '.$user->regnumber}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Place Students</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->

                </form>
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    {{-- <section class="col-lg-5 connectedSortable"> --}}


    {{-- </section> --}}
    <!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection