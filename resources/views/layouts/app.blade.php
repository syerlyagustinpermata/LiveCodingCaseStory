<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventaris Komputer')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #1e293b;
            margin: 0;
        }
        header {
            background: #1e3a8a;
            color: white;
            padding: 16px 5%;
        }
        header a {
            color: white;
            text-decoration: none;
            margin-right: 18px;
        }
        nav {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }
        .container {
            max-width: 1050px;
            margin: 28px auto;
            padding: 0 18px;
        }
        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 18px;
            box-shadow: 0 2px 8px #0000000b;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 7px 0 15px;
            box-sizing: border-box;
        }
        button, .btn {
            display: inline-block;
            padding: 9px 13px;
            border: 0;
            border-radius: 5px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }
        .danger { background: #dc2626; }
        .muted { color: #64748b; }
        .success {
            background: #dcfce7;
            padding: 12px;
            margin-bottom: 15px;
        }
        .error {
            color: #b91c1c;
            margin-bottom: 12px;
        }
        .inline { display: inline; }
        @media (max-width: 650px) {
            .table-wrap { overflow-x: auto; }
        }
    </style>
</head>
<body>
<header>
    <nav>
        <strong>Inventaris Komputer</strong>
        <a href="{{ route('items.index') }}">Barang</a>
        <a href="{{ route('categories.index') }}">Kategori</a>

        <span style="margin-left:auto">
            {{ auth()->user()->name }}
        </span>

        <form class="inline" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>
</header>

<main class="container">
    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="error">
            <strong>Periksa kembali input:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</main>
</body>
</html>