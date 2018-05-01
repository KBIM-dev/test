<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1>Companies</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    @foreach($companies as $key => $value)
        <div>{{ $value->title }}</div>
        @foreach($value->projects as $key => $value)
            <div>{{ $value->title }}</div>
        @endforeach
    @endforeach

</div>
</body>
</html>