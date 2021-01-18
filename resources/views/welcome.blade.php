<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="p-4">
    <table class="table-auto border border-solid w-full">
        <thead>
            <td class="p-4 bg-gray-200 font-bold text-left">Book Title</td>
            <td class="p-4 bg-gray-200 font-bold text-center">Book Release Date</td>
        </thead>
        @foreach($books as $book)
        <tr>
            <td class="p-2 bg-gray-100"><a href="book/{{ $book->id }}"> {{ $book->title }}</a> </td>
            <td class="p-2 bg-gray-100">{{ $book->release_date }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
