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
        {{-- Start Form Row --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default ">
                    @include('Admin.common.message')
                    <div class="panel-body ">
                            <div class="form-group">

                                {{Form::open(['url'=>AdminUrl('settings'),'method'=>"POST",'files'=>true])}}
                                <div>
                                    <div class="col-lg-6">
                                        <label>{{trans('admin.siteNameAR')}}</label>
                                        {{Form::text('site_name[1]',$settingsDesc->where('language_id',1)->first()->site_name,['placeholder'=> trans('admin.nameEN'), 'class'=>'form-control'])}}
                                        <hr>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>{{trans('admin.siteNameEN')}}</label>
                                        {{Form::text('site_name[2]',$settingsDesc->where('language_id',2)->first()->site_name,['placeholder'=> trans('admin.nameAR'), 'class'=>'form-control'])}}
                                        <hr>
                                    </div>

                                </div>
                                <hr>
                                <div class="col-lg-12">
                                    <label>{{trans('admin.addressAR')}}</label>
                                    {{Form::text('address[1]',$settingsDesc->where('language_id',1)->first()->address,['placeholder'=> trans('admin.address'), 'class'=>'form-control'])}}
                                    <hr>
                                    <label>{{trans('admin.addressEN')}}</label>
                                    {{Form::text('address[2]',$settingsDesc->where('language_id',2)->first()->address,['placeholder'=> trans('admin.address'), 'class'=>'form-control'])}}
                                    <hr>
                                    <label>{{trans('admin.logo')}}</label>
                                    {{Form::file('logo',[ 'class'=>'form-control'])}}
                                    @if(!empty(settings()->logo))
                                        <img src="{{\Storage::url(settings()->logo)}}" style="height: 100px; width: 100px;">
                                    @endif
                                    <hr>
                                    <label>{{trans('admin.icon')}}</label>
                                    {{Form::file('icon',[ 'class'=>'form-control'])}}
                                    @if(!empty(settings()->icon))
                                        <img src="{{Storage::url(settings()->icon)}}" style="height: 100px; width: 100px;">
                                    @endif
                                    <hr>
                                    <label>{{trans('admin.status')}}</label>
                                    {{Form::select('status',['opened'=>trans('admin.opened'),'closed'=>trans('admin.closed')],$settings->status,['class'=>'form-control'])}}
                                    <hr>
                                    <label>{{trans('admin.mobileNumber')}}</label>
                                    {{Form::text('mobile_number',$settings->mobile_number,['class'=>'form-control'])}}
                                    <hr>
                                    <label>{{trans('admin.mainLanguage')}}</label>
                                    {{Form::select('main_language',\App\Models\Language::pluck('language_name','language_id'),$settings->main_language,['class'=>'form-control'])}}
                                    <hr>
                                    <label>{{trans('admin.mail')}}</label>
                                    {{Form::text('mail',$settings->mail,['class'=>'form-control', 'placeholder'=>trans('admin.email')])}}
                                    <hr>
                                    <label>{{trans('admin.facebook')}}</label>
                                    {{Form::text('facebook',$settings->facebook,['class'=>'form-control', 'placeholder'=>trans('admin.facebook')])}}
                                    <hr>
                                    <label>{{trans('admin.twitter')}}</label>
                                    {{Form::text('twitter',$settings->twitter,['class'=>'form-control', 'placeholder'=>trans('admin.twitter')])}}
                                    <hr>
                                    <label>{{trans('admin.insta')}}</label>
                                    {{Form::text('insta',$settings->insta,['class'=>'form-control', 'placeholder'=>trans('admin.insta')])}}
                                    <hr>
                                    <label>{{trans('admin.youtube')}}</label>
                                    {{Form::text('youtube',$settings->youtube,['class'=>'form-control', 'placeholder'=>trans('admin.youtube')])}}
                                    <hr>
                                    <label>{{trans('admin.workTimeAR')}}</label>
                                    {{Form::text('work_time[1]',$settingsDesc->where('language_id',1)->first()->work_time,['class'=>'form-control', 'placeholder'=>trans('admin.workTimeAR')])}}
                                    <hr>
                                    <label>{{trans('admin.workTimeEN')}}</label>
                                    {{Form::text('work_time[2]',$settingsDesc->where('language_id',2)->first()->work_time,['class'=>'form-control', 'placeholder'=>trans('admin.workTimeEN')])}}
                                    <hr>
                                    <label>{{trans('admin.about_our_workAR')}}</label>
                                    {{Form::textarea('about_our_work[1]',$settingsDesc->where('language_id',1)->first()->about_our_work,['class'=>'form-control', 'placeholder'=>trans('admin.about_our_workAR')])}}
                                    <hr><label>{{trans('admin.about_our_workEN')}}</label>
                                    {{Form::textarea('about_our_work[2]',$settingsDesc->where('language_id',2)->first()->about_our_work,['class'=>'form-control', 'placeholder'=>trans('admin.about_our_workEN')])}}
                                    <hr>
                                    <label>{{trans('admin.maintenanceAR')}}</label>
                                    {{Form::textarea('maintenance_message[1]',$settingsDesc->where('language_id',1)->first()->maintenance_message,['class'=>'form-control', 'placeholder'=>trans('admin.maintenanceAR')])}}
                                    <hr>
                                    <label>{{trans('admin.maintenanceEN')}}</label>
                                    {{Form::textarea('maintenance_message[2]',$settingsDesc->where('language_id',2)->first()->maintenance_message,['class'=>'form-control', 'placeholder'=>trans('admin.maintenanceEN')])}}
                                    <hr>
                                    <center>
                                        {{Form::submit(trans('admin.update'),[ 'class'=>'btn btn-primary'])}}

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