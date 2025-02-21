<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API</title>
    <link rel="stylesheet" href="/assets/css/api.css">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>userId</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $api)
                <tr>
                    <td>{{$api['userId']}}</td>
                    <td>{{$api['title']}}</td>
                    <td>{{$api['body']}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>