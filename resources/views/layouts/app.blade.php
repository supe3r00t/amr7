<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'آمر سبعة') }}</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            font-family: 'Tajawal', sans-serif;
            color: #f8fafc;
        }
        .navbar {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .btn-primary {
            background-color: #00BFA5;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #00A58C;
        }
        .card {
            background: white;
            color: #1e293b;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

<!-- 🔹 Navbar -->
<nav class="navbar flex justify-between items-center px-8 py-4 text-white">
    <a href="{{ url('/') }}" class="text-2xl font-bold">آمر سبعة</a>
    <div class="flex gap-6">
        <a href="{{ url('/') }}" class="hover:text-teal-400">الرئيسية</a>
        <a href="{{ route('contact') }}" class="hover:text-teal-400">تواصل معنا</a>
    </div>
</nav>

<!-- 🔹 Content -->
<main class="flex-1 flex justify-center items-center p-8">
    <div class="card w-full max-w-3xl p-8">
        @yield('content')
    </div>
</main>

<!-- 🔹 Footer -->
<footer class="text-center py-4 text-gray-400 text-sm">
    © {{ date('Y') }} آمر سبعة - جميع الحقوق محفوظة.
</footer>
</body>
</html>
