@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('bankaccount.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All Bank Accounts
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('bankaccount.update',$bankaccounts->id) }}" method="post">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Account Number <b style="color: red;">*</b> </label>
                                <input type="text" class="form-control" name="accountnumber"
                                    value="{{$bankaccounts->accountnumber}}">
                            </div>
                            <div class="form-group">
                                <label for="">Account Type <b style="color: red;">*</b></label>
                                <select class="form-control" name="accounttype" >
                                    <option selected="disabled">Select Account Type</option>
                                    <option {{old('accounttype',$bankaccounts->accounttype)=="Current"? 'selected':''}}>Current</option>
                                    <option {{old('accounttype',$bankaccounts->accounttype)=="Savings"? 'selected':''}}>Savings</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="name">Bank</label>
                                <select name="bank_id" class="form-control">
                                    <option selected="disabled">Select Bank</option>
                                    @foreach ($banks as $bank)

                                    <option value="{{$bank->id}}" {{$bank->id==$bankaccounts->bank_id ? 'selected':''}}>
                                        {{$bank->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('bankaccount.index') }}" class="btn btn-default">Cancel</a>

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