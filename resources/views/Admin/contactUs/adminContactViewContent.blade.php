@extends('Admin.content')
@section('content')
    <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    {{--{{$title}} <small>{{$titleSummary}}</small>--}}
                </h1>
            </div>
        </div>
        <!-- /. ROW  -->
        {{--Start View Content Row--}}
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <strong>{{trans('admin.from')}}:</strong> <small> {{$content->contact_mail}}</small>
                        <br>
                        <strong>{{trans('admin.contactName')}}:</strong> <small> {{$content->contact_name}}</small>
                        <br>
                        <strong>{{trans('admin.subject')}}:</strong> <small> {{$content->contact_subject}}</small>
                    </div>
                    <div class="panel-body ">
                        <strong>{{trans('admin.content')}}:</strong>
                        <div style=" border: 1px solid black;">
                            <br>
                            <div style="padding-left: 10px;">
                                {{$content->contact_message}}
                            </div>
                            <hr>
                        </div>
                        <br>
                        <a href="{{AdminUrl('contacts')}}" class="btn btn-primary"> {{trans('admin.goBack')}} </a>
                    </div>
                </div>
            </div>
        </div>
    {{--End View Content Row--}}


@endsection