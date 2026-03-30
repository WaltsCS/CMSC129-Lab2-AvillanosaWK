<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('books.form')
    </form>

    <br>
    <a href="{{ route('books.index') }}">Back to list</a>
</body>
</html>