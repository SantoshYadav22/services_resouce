<!DOCTYPE html>
<html>
<head>
    <title>Tanks App</title>
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

<h1>Edit {{ $tanks->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($tanks, array('route' => array('tanks.update', $tanks->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('shark_level', 'tanks Level') }}
        {{ Form::select('shark_level', array('0' => 'Select a Level', '1' => 'Iron Behemoth', '2' => 'Thunderclaw', '3' => 'Shadow Sentinel'), null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the tanks!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>