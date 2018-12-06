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
    {{-- Start Contatcts Table Row --}}
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                @include('Admin.common.message')
                <div class="panel-heading">
                    <a href="{{AdminUrl("categories/deleteAll")}}" class="btn btn-danger"> {{trans('admin.deleteAll')}} </a>
                    <a href="{{AdminUrl("categories/create")}}" class="btn btn-primary"> {{trans('admin.create')}} </a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>{{trans('admin.id')}}</th>
                                <th>{{trans('admin.categoryNameAR')}}</th>
                                <th>{{trans('admin.categoryNameEN')}}</th>
                                <th>{{trans('admin.image')}}</th>
                                <th>{{trans('admin.edit')}}</th>
                                <th>{{trans('admin.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr class="odd gradeX">
                                <th>{{$category->category_id}}</th>
                                <th>{{!empty($categoriesDesc->where('language_id',1)->where('category_id',$category->category_id )->first())?$categoriesDesc->where('language_id',1)->where('category_id',$category->category_id )->first()->category_name:''}}</th>
                                <th>{{!empty($categoriesDesc->where('language_id',2)->where('category_id',$category->category_id )->first() )?$categoriesDesc->where('language_id',2)->where('category_id',$category->category_id )->first()->category_name:''}}</th>
                                <th>
                                    <img src="{{Storage::url($category->category_image)}}" style="height: 100px; width: 100px;">
                                </th>
                                <th><a href="{{AdminUrl('categoriesEdit/')}}" class="btn btn-info">{{trans('admin.edit')}}</a></th>
                                <th>
                                    {{Form::open(['url'=>AdminUrl('categoriesDelete'), 'method'=>'DELETE'])}}
                                    <input type="hidden" value="{{$category->category_id}}" name="category_id">
                                    {{Form::submit(trans('admin.delete'),['class'=>'btn btn-danger'])}}
                                    {{Form::close()}}
                                </th>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    {{-- Start Contatcts Table Row --}}



@endsection