@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@elseif(session('failed'))
    <div class="alert alert-danger">
        {{session('failed')}}
    </div>
@endif
@if($errors)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif