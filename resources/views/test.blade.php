<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/test" class="btn btn-primary">Back to test page</a>
    {{ $name }}
    @foreach ($Books as $book)
        {{ $book }}
    @endforeach

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
