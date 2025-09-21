<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'MySite' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(1rem);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body class="min-h-screen flex flex-col scroll-smooth text-white"
    style="background:linear-gradient(-45deg,#000000,#1f1f1f,#111827,#000000);
           background-size:400% 400%;
           animation:gradientMove 12s ease infinite;">

    <!-- Navigation -->
    <header class="w-full py-5 px-8 bg-black/40 backdrop-blur-md sticky top-0 z-50 shadow-lg">
        <nav class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-extrabold tracking-wide">MySite</div>
            <ul class="flex space-x-8">
                <li>
                    <a href="/"
                        class="relative after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/jobs"
                        class="relative after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                        Jobs
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="flex-1 flex items-center justify-center px-6">
        <div class="text-center max-w-3xl">
            <h1
                class="text-5xl md:text-6xl font-extrabold mb-6 opacity-0 translate-y-4 animate-[fadeInUp_1s_ease-out_forwards] drop-shadow-[0_0_20px_rgba(255,255,255,0.25)]">
                {{ $heading ?? 'Welcome to MySite' }}
            </h1>
            {{ $slot }}
        </div>
    </main>

    <footer class="py-4 text-center text-gray-400 text-sm">
        © {{ date('Y') }} MySite — All rights reserved.
    </footer>
</body>

</html>
