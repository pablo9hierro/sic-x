<!-- resources/views/logout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>

    <h1>Logout</h1>
    <form method="post" action="{{ route('logout') }}">

        <button type="submit">Logout</button>
    </form>

</body>
</html>
