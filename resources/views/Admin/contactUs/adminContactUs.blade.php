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
                    <a href="{{AdminUrl("contacts/deleteAll")}}" class="btn btn-danger"> {{trans('admin.deleteAll')}} </a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>{{trans('admin.id')}}</th>
                                <th>{{trans('admin.contactName')}}</th>
                                <th>{{trans('admin.contactEmail')}}</th>
                                <th>{{trans('admin.view')}}</th>
                                <th>{{trans('admin.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                            <tr class="odd gradeX">
                                <th>{{$contact->contact_id}}</th>
                                <th>{{$contact->contact_name}}</th>
                                <th>{{$contact->contact_mail}}</th>
                                <th><a href="{{AdminUrl('viewMail/'.$contact->contact_id)}}" class="btn btn-info">{{trans('admin.view')}}</a></th>
                                <th>
                                    {{Form::open(['url'=>AdminUrl('contacts'), 'method'=>'DELETE'])}}
                                    <input type="hidden" value="{{$contact->contact_id}}" name="contact_id">
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