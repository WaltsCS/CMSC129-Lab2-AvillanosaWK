<!DOCTYPE html>
<html>
<head>
    <title>LibAlexandria - Books</title>
</head>
<body>
    <h1>Books List</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('books.create') }}">Add New Book</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Year</th>
                <th>ISBN</th>
                <th>Copies</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->copies_available }}</td>
                    <td>
                        <a href="{{ route('books.show', $book) }}">View</a> |
                        <a href="{{ route('books.edit', $book) }}">Edit</a> |
                        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this book?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No books found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>