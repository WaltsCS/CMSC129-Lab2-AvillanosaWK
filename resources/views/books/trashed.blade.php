<!DOCTYPE html>
<html>
<head>
    <title>Trashed Books</title>
</head>
<body>
    <h1>Trashed Books</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <p style="color: darkorange;">These books are in trash. You can restore them or permanently delete them.</p>

    <a href="{{ route('books.index') }}">Back to Active Books</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Deleted At</th>
                <th>Actions</th>
                <th>Cover</th>
            </tr>
        </thead>
        <tbody>
            @forelse($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->deleted_at }}</td>
                    <td>
                        <form action="{{ route('books.restore', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit">Restore</button>
                        </form>

                        <form action="{{ route('books.forceDelete', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Permanently delete this book? This cannot be undone.')">
                                Delete Permanently
                            </button>
                        </form>
                    </td>
                    <td>
                        @if($book->cover_image)
                            <img src="{{ asset('storage/' . $book->cover_image) }}" width="80">
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Trash is empty.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>