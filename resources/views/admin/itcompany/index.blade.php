@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-11 connectedSortable">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add IT Company
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
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Location</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($itcompanies as $itcompany)
                                <tr>
                                    <td>{{$itcompany->name}}</td>
                                    <td>{{$itcompany->code}}</td>

                                    <td><a href="{{ route('itcompany.edit',$itcompany->id) }}"><span
                                                class="fa fa-edit fa-2x text-primary"></span></a></td>
                                    <td>
                                        <form id="delete-form-{{$itcompany->id}}" style="display: none"
                                            action="{{ route('itcompany.destroy',$itcompany->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$itcompany->id}}').submit();
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
                                    <th>Email</th>
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


        {{-- Data input modal area --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">

                <form action="{{ route('itcompany.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span class="fa fa-building-o"></span> Add IT Company</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Name <b style="color: red;">*</b> </label>
                                <input type="text" class="form-control" name="name" placeholder="Company Name"
                                    autofocus>
                            </div>
                            <div class="form-group">
                                <label for="">Address <b style="color: red;">*</b> </label>
                                <input type="text" class="form-control" name="address" placeholder="Company Address"
                                    autofocus>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Company Phone"
                                    autofocus>
                            </div>
                            <div class="form-group">
                                <label for="">Location <b style="color: red;">*</b></label>
                                <select class="form-control" name="location_id">
                                    <option selected="disabled">Select Location</option>
                                    @foreach ($locations as $location)
                                    <option value="{{$location->id}}">
                                        {{$location->name}}
                                    </option>
                                    @endforeach

                                </select>
                            </div>

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
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