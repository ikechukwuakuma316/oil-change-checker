<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oil Change Checker</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f0f2f5;
            color: #1a1a1a;
            min-height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 60px 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            padding: 40px;
            width: 100%;
            max-width: 560px;
        }

        h1 {
            font-size: 1.6rem;
            margin-bottom: 8px;
            color: #111;
        }

        p.subtitle {
            color: #555;
            margin-bottom: 28px;
            font-size: 0.95rem;
        }

        label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            margin-top: 20px;
            margin-bottom: 6px;
            color: #333;
        }

        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d0d5dd;
            border-radius: 6px;
            font-size: 1rem;
            color: #111;
            transition: border-color 0.2s;
        }

        input[type="number"]:focus,
        input[type="date"]:focus {
            outline: none;
            border-color: #1a56db;
            box-shadow: 0 0 0 3px rgba(26, 86, 219, 0.12);
        }

        .error-msg {
            color: #c0392b;
            font-size: 0.82rem;
            margin-top: 5px;
        }

        .btn {
            display: inline-block;
            margin-top: 28px;
            padding: 12px 24px;
            background: #1a56db;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn:hover {
            background: #1440a8;
        }

        .btn-secondary {
            background: #f0f2f5;
            color: #333;
            border: 1px solid #d0d5dd;
        }

        .btn-secondary:hover {
            background: #e2e5eb;
        }

        .result-banner {
            padding: 18px 20px;
            border-radius: 8px;
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 28px;
        }

        .result-banner.due {
            background: #fff0f0;
            color: #c0392b;
            border: 1px solid #f5c6c6;
        }

        .result-banner.not-due {
            background: #f0fff4;
            color: #1a7a3c;
            border: 1px solid #b7eac9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 4px;
            font-size: 0.92rem;
        }

        th, td {
            padding: 11px 14px;
            border: 1px solid #e4e7ec;
            text-align: left;
        }

        th {
            background: #f8f9fb;
            font-weight: 600;
            color: #444;
            width: 55%;
        }

        td {
            color: #111;
        }

        h2 {
            font-size: 1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
    <div class="card">
        @yield('content')
    </div>
</body>
</html>