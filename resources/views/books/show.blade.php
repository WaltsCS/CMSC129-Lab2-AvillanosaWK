<!DOCTYPE html>
<html>
<head>
    <title>View Book</title>
</head>
<body>
    <h1>Book Details</h1>

    <p><strong>Title:</strong> {{ $book->title }}</p>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Genre:</strong> {{ $book->genre }}</p>
    <p><strong>Published Year:</strong> {{ $book->published_year }}</p>
    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
    <p><strong>Description:</strong> {{ $book->description }}</p>
    <p><strong>Copies Available:</strong> {{ $book->copies_available }}</p>
    @if($book->cover_image)
        <p><strong>Cover:</strong></p>
        <img src="{{ asset('storage/' . $book->cover_image) }}" width="150">
    @endif

    <a href="{{ route('books.index') }}">Back to list</a>
</body>
</html>