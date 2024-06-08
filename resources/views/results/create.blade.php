<!-- resources/views/results/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Result</title>
</head>
<body>
    <h1>Create a New Result</h1>
    <form action="{{ route('results.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Result Name">
        <button type="submit">Create</button>
    </form>
</body>
</html>
