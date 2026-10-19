<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Inventaris</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
        }
        .card {
            background: white;
            width: min(360px, 85%);
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 4px 18px #0001;
        }
        input, button {
            width: 100%;
            padding: 11px;
            margin-top: 8px;
            margin-bottom: 14px;
            box-sizing: border-box;
        }
        button {
            background: #2563eb;
            color: white;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
        }
        .error { color: #b91c1c; }
        .success { color: #15803d; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Inventaris Komputer</h2>
        <p>Silakan login untuk melanjutkan.</p>

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf

            <label for="email">Email</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >

            <label for="password">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>