@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="ui red message">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="ui success message">
        <i class="close icon"></i>
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="ui negative message">
        <i class="close icon"></i>
        {{session('error')}}
    </div>
@endif