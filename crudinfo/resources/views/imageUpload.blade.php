<!DOCTYPE html>
<html>
<head>
    <title>image upload</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading"><p>image upload</p></div>

        @if (count($errors) > 0)
            <div class="alert alert-danger" align="left">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
<img src="/images/{{ Session::get('path') }}" width="250" height="300">
        @endif

        <div class="panel-body">
            <form action="{{ url('/image/upload') }}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <input type="file" name="image"/>
                    <button type="submit" class="btn btn-success">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

