<!DOCTYPE html>
<html>
<head>
    <title>Tanks App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('tanks') }}">Tank Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('tanks') }}">View All Tank</a></li>
            <li><a href="{{ URL::to('tanks/create') }}">Create a Tank</a>
        </ul>
    </nav>

<h1>Showing {{ $tanks->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $tanks->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $tanks->email }}<br>
            <strong>Tank Name:</strong> {{ $tanks->shark_level }}
        </p>
    </div>

</div>
</body>
</html>