<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/register" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password">
        <br><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation">
        <br><br>

        <button type="submit">Register</button>
    </form>

</body>
</html>
