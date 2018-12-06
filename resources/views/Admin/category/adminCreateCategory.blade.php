@extends('Admin.content')
@section('content')
    <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    {{$title}} {{--<small>{{$titleSummary}}</small>--}}
                </h1>
            </div>
        </div>
        <!-- /. ROW  -->
        {{-- Start Form Row --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default ">
                    @include('Admin.common.message')
                    <div class="panel-body ">
                            <div class="form-group">

                                {{Form::open(['url'=>AdminUrl('categories/create'),'method'=>"POST",'files'=>true])}}
                                <div>
                                    <div class="col-lg-6">
                                        <label>{{trans('admin.nameAR')}}</label>
                                        {{Form::text('category_name[1]',old('category_name[1]'),['placeholder'=> trans('admin.nameEN'), 'class'=>'form-control'])}}
                                        <hr>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>{{trans('admin.nameEN')}}</label>
                                        {{Form::text('category_name[2]',old('category_name[2]'),['placeholder'=> trans('admin.nameAR'), 'class'=>'form-control'])}}
                                        <hr>
                                    </div>

                                </div>
                                <hr>
                                <div class="col-lg-12">
                                    <label>{{trans('admin.parentCategory')}}</label>
                                    {{Form::select('parent_id',\App\Models\Category_description::where('language_id',2)->pluck('category_name','category_description_id'),old('parent_id'),['class'=>'form-control', 'placeholder'=>'...........'])}}
                                    <hr>
                                    <label>{{trans('admin.hintAR')}}</label>
                                    {{Form::textarea('category_hint[1]',old('category_hint[1]'),['class'=>'form-control', 'placeholder'=>trans('admin.maintenanceAR')])}}
                                    <hr>
                                    <label>{{trans('admin.hintEN')}}</label>
                                    {{Form::textarea('category_hint[2]',old('category_hint[2]'),['class'=>'form-control', 'placeholder'=>trans('admin.maintenanceEN')])}}
                                    <hr>
                                    <label>{{trans('admin.category_image')}}</label>
                                    {{Form::file('category_image',[ 'class'=>'form-control'])}}
                                    <br>
                                    <center>
                                        {{Form::submit(trans('admin.create'),['class'=>'btn btn-primary'])}}

                                    </center>
                                </div>
                                {{Form::close()}}

                            </div>
                            <hr>

                    </div>
                </div>
            </div>
        </div>
        {{-- End Form Row --}}


@endsection