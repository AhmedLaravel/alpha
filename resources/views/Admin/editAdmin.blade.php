@extends('Admin.content')
@section('content')
    <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    {{$title}} <small>{{$titleSummary}}</small>
                </h1>
            </div>
        </div>
        <!-- /. ROW  -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default ">
                    @include('Admin.common.message')
                    <div class="panel-body ">
                        <form action="{{AdminUrl('editAdmin')}} " method="POST">
                            {{csrf_field()}}
                            <input type="hidden" value="{{$adminId}}" name="id">
                            <div class="form-group">
                                <label>{{trans('admin.name')}}</label>
                                <input class="form-control" type="text" value="{{$admin->name}}" name="name" placeholder="{{trans('admin.enterName')}}">
                            </div>
                            <hr>
                        {{--<div class="col-lg-6">--}}
                                <div class="form-group">
                                    <label>{{trans('admin.email')}}</label>
                                    <input class="form-control" type="text" value="{{$admin->email}}" name="email" placeholder="{{trans('admin.enterEmail')}}">
                                </div>
                        {{--</div>--}}
                            <hr>
                            <div class="form-group">
                                <label>{{trans('admin.password')}}</label>
                                <input class="form-control" type="password" name="password" placeholder="{{trans('admin.enterPass')}}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>{{trans('admin.passwordConfirmation')}}</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="{{trans('admin.enterPassConfirmation')}}">
                            </div>
                            <hr>
                            <div>
                               <center> <input class=" btn btn-primary" type="submit"  value="{{trans('admin.editInput')}}" ></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection