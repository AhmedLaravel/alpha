
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
    {{--<head>  </head>--}}
    {{--<body>--}}
        {{--<section class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-mid-12">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="panel-heading">--}}
                               {{--<strong>{{trans('admin.welcome')}} {{$data['admin']->name}} </strong>--}}
                            {{--</div>--}}
                            {{--<center style="padding-top: 40px;">--}}
                                {{--<button href="{{AdminUrl('reset/password/'.$data['token'])}}"  style="background-color:blue; size" > {{trans('admin.reset')}} </button>--}}
                                {{--<hr>--}}
                                {{--{{trans('admin.orCopyThisLink')}}<br>--}}
                                {{--<a href="{{AdminUrl('reset/password/'.$data['token'])}}">{{AdminUrl('reset/password/'.$data['token'])}}</a>--}}
                                {{--<br>--}}
                            {{--</center>--}}
                            {{--Thanks,<br>--}}
                            {{--{{ Config('app.name')}}--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</body>--}}

{{--</html>--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width: 100%; display:block;">
                            <h2>{{ trans('admin.welcome') }}</h2>
                                <p>
                                    <div >
                                    <strong>{{trans('admin.hi')}} {{$data['admin']->name}}!</strong><br>
                                    {{ trans('admin.ForgotPasswordEmailText') }}<br>
                                    <a  href="{{AdminUrl('reset/password/'.$data['token'])}}" class="dropdown-toggle"  > {{trans('admin.clickHere')}} </a>
                                    <br>
                                     </div>
                                    <strong>{{ trans('admin.sincerely') }},</strong><br>
                                    {{ trans('admin.bestRegards') }}
                                    {{ trans('admin.ProjectName')}}
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
{{--@component('mail::message')--}}
{{--# Reset Acount--}}

{{--Welcom {{$data['admin']->name}}--}}

{{--@component('mail::button', ['url' => AdminUrl('reset/password/'.$data['token']), 'class' => "btn btn-primary"])--}}
{{--{{trans('admin.reset')}}--}}
{{--<br>--}}
{{--@endcomponent--}}
{{--# {{trans('admin.or_Copy_This_link')}}<br>--}}
{{--<a href="{{AdminUrl('reset/password/'.$data['token'])}}">{{AdminUrl('reset/password/'.$data['token'])}}</a>--}}
{{--Thanks,<br>--}}
{{--{{ Config('app.name')}}--}}
{{--@endcomponent--}}
