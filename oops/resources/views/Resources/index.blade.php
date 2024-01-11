<!DOCTYPE html>
<html>
<head>
    <title>Resources App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('tanks') }}">Tank Menu</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('tanks') }}">View All Tank</a></li>
        <li><a href="{{ URL::to('tanks/create') }}">Create a Tank</a>
    </ul>
</nav>

<h1>All the Tanks</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Tank Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($list as $key => $value)
        <tr>
            @php $tank_list = array('Iron Behemoth','Thunderclaw','Shadow Sentinel'); @endphp
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            @foreach($tank_list as $Key => $list)
                @if($Key + 1 == $value->shark_level )
                <td>{{ $list }}</td>
                @endif
            @endforeach

            <td>
                {{ Form::open(array('url' => 'tanks/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Tank', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
               
                <a class="btn btn-small btn-success" href="{{ URL::to('tanks/' . $value->id) }}">Show this Tank</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('tanks/' . $value->id . '/edit') }}">Edit this Tank</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>