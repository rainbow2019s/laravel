<!doctype>
<html>
<head>
    <title>index</title>
<head>
<body>

    <h3>{{$first}}.{{$last}}</h3>

    <ul>
    @foreach($departments as $department)
        @if($department == 'aaa')
            <li>{{$department}} *</li>
        @else
            <li>{{$department}}</li>
        @endif
    @endforeach
    </ul>

</body>
</html>