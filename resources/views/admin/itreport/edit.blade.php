@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('report.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All IT Reports
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('report.update',$reports->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Title <b style="color: red;">*</b> </label>
                                <input type="text" class="form-control" name="title" value="{{$reports->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Case Study</label>
                                <input type="text" class="form-control" name="casestudy" value="{{$reports->casestudy}}">
                            </div>
                            
                            <input type="file" name="filename">

                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('report.index') }}" class="btn btn-default">Cancel</a>

                    </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
</div>
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