<h1>This is show.blade.php <h1>

Title : {{ $blog->title}}
<br>

Body : {{ $blog->body}}
<br>

Created at : {{ $blog->created_at->diffForHumans()}}