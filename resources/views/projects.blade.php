<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<body>
<h1>Projects</h1>
<ul>
    @foreach($data as $index => $project)
        <li><a href="{{ route('project-details', $index) }}">{{ $project['title'] }}</a></li>
    @endforeach
</ul>
</body>
</html>
