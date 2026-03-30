<div>
    <label>Title:</label><br>
    <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}">
    @error('title') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<div>
    <label>Author:</label><br>
    <input type="text" name="author" value="{{ old('author', $book->author ?? '') }}">
    @error('author') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<div>
    <label>Genre:</label><br>
    <input type="text" name="genre" value="{{ old('genre', $book->genre ?? '') }}">
    @error('genre') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<div>
    <label>Published Year:</label><br>
    <input type="number" name="published_year" value="{{ old('published_year', $book->published_year ?? '') }}">
    @error('published_year') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<div>
    <label>ISBN:</label><br>
    <input type="text" name="isbn" value="{{ old('isbn', $book->isbn ?? '') }}">
    @error('isbn') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<div>
    <label>Description:</label><br>
    <textarea name="description">{{ old('description', $book->description ?? '') }}</textarea>
    @error('description') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<div>
    <label>Copies Available:</label><br>
    <input type="number" name="copies_available" value="{{ old('copies_available', $book->copies_available ?? 0) }}">
    @error('copies_available') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<div>
    <label>Cover Image:</label><br>
    <input type="file" name="cover_image">
    @error('cover_image') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<br>
<button type="submit">Save</button>