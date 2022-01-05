<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
</head>

<body>
    <h1>
        LeaderBoard
    </h1>
    <table>
        <tr>
            <th>Game Title</th>
            <th>Category</th>
            <th>Time (sec)</th>
            <th>Runner</th>
        </tr>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->game->name }}</td>
                <td>{{ $record->category }}</td>
                <td>{{ $record->time }} s</td>
                <td>{{ $record->user->name }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
