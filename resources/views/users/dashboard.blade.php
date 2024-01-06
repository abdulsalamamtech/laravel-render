<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Document</title>
</head>
<body>
    <h1>Dashboard Page</h1>

    <?php echo $users[0]['name']; ?>
    <?php echo $users[1]['name']; ?>

    @foreach ($users as $key)
        <h1>{{$key['name']}}</h1>
        <h1>{{$key['skills']}}</h1>

        @if($key['age'] <= 18)
            <p>You're a young guy</p>
        @else
            <p>You're a old guy</p>
        @endif
    <hr>
    @endforeach

    <p>&copy; copyright {{date('Y')}}</p>

</body>
</html>