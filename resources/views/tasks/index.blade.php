<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<ul>
    @foreach($tasks as $task)
        <a href="/tasks/{{ $task->id }}">
            <li>{{ $task->body }}</li>
        </a>
    @endforeach
</ul>
</body>
</html>
