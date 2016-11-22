<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<div>
    <ul>
        @foreach($titles as $title)
            <li>{{ $title }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>
