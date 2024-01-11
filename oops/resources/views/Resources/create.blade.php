<!DOCTYPE html>
<html>
<head>
    <title>Tank App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    @php
    use Collective\Html\FormFacade as Form;
    use Collective\Html\HtmlFacade as HTML;
@endphp
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


<h1>Create a Tank</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'tanks')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', old('email'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('shark_level', 'shark Level') }}
        {{ Form::select('shark_level', array('0' => 'Select a Level', '1' => 'Iron Behemoth', '2' => 'Thunderclaw', '3' => 'Shadow Sentinel'), old('shark_level'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the tank!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>