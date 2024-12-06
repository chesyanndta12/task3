<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!DOCTYPE html>
<html>
<head>
    <title>news</title>
</head>
<body>
    <h1>news</h1>
    @foreach ($news as $row)
    <div>
        <div style="width: 10%;floating:left">
            <img src="storage/{{ $row->picture }}">
        </div>
        <div style="width: 90%;">
            <span>{{ $row->title}}</span>
            <p style="display: inline-block;">{{ $row->content }}</p>
        </div>
    </div>
    @endforeach

</body>
</html>

</body>
</html>