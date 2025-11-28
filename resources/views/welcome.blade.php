<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Adventure Awaits | Hiking & Mountains</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #001219, #0a3d62, #3c6382);
            color: white;
            overflow-x: hidden;
        }

        .hero {
            background: url('https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            height: 100vh;
            position: relative;
        }

        .hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.55);
        }

        .parallax {
            background-attachment: fixed;
        }

        .mountain {
            position: absolute;
            bottom: 0;
            width: 100%;
            animation: moveClouds 50s linear infinite;
            opacity: 0.8;
        }

        @keyframes moveClouds {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .btn-glow {
            transition: all 0.3s ease;
            box-shadow: 0 0 0 rgba(255,255,255,0);
        }

        .btn-glow:hover {
            box-shadow: 0 0 25px rgba(255,255,255,0.5);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
  <nav class="fixed top-0 left-0 w-full bg-transparent z-50 backdrop-blur-sm py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
        <div class="text-2xl font-bold text-white" data-aos="fade-right">🏔️ MOUNTAIN TRAIL</div>
        <div class="space-x-6 hidden md:flex">
            <a href="#about" class="hover:text-emerald-400 transition">About</a>
            <a href="#routes" class="hover:text-emerald-400 transition">Routes</a>
            <a href="#contact" class="hover:text-emerald-400 transition">Contact</a>

            @if (Route::has('login'))
                @auth
                    <!-- Jika user sudah login -->
                    <a href="{{ url('/home') }}"
                        class="bg-emerald-500 px-4 py-2 rounded-md font-semibold hover:bg-emerald-600 transition">
                        Dashboard
                    </a>
                @else
                    <!-- Jika user belum login -->
                    <a href="{{ route('login') }}"
                        class="bg-emerald-500 px-4 py-2 rounded-md font-semibold hover:bg-emerald-600 transition">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="bg-transparent border border-emerald-500 px-4 py-2 rounded-md font-semibold text-emerald-400 hover:bg-emerald-500 hover:text-white transition">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>


    {{-- Hero Section --}}
    <section class="hero flex items-center justify-center text-center relative parallax">
        <div class="z-10 px-6" data-aos="fade-up" data-aos-delay="300">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4">Adventure Awaits</h1>
            <p class="text-xl md:text-2xl mb-6 text-gray-200">Climb mountains, breathe the wild air, and find your freedom.</p>
            <a href="#about" class="btn-glow bg-emerald-500 text-white px-8 py-3 rounded-lg font-semibold text-lg">Start Exploring</a>
        </div>
        <img src="https://i.ibb.co/vmcFLbp/mountain-layer.png" class="mountain" alt="mountains">
    </section>

    {{-- About Section --}}
    <section id="about" class="py-24 bg-[#0a3d62] text-center">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-8" data-aos="fade-down">Discover the Peaks</h2>
            <p class="text-gray-300 text-lg leading-relaxed" data-aos="fade-up">
                Whether you're a beginner or a seasoned mountaineer, our trails are designed to challenge, inspire, and reward.
                <br>Feel the wind, witness the sunrise, and create unforgettable memories.
            </p>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="p-6 bg-[#052539] rounded-xl shadow-lg hover:scale-105 transition" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://cdn-icons-png.flaticon.com/512/3039/3039949.png" class="w-16 mx-auto mb-4" alt="">
                    <h3 class="text-2xl font-semibold mb-2">Trail Guides</h3>
                    <p class="text-gray-400">Certified experts ready to lead your adventure safely.</p>
                </div>
                <div class="p-6 bg-[#052539] rounded-xl shadow-lg hover:scale-105 transition" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" class="w-16 mx-auto mb-4" alt="">
                    <h3 class="text-2xl font-semibold mb-2">Camping Spots</h3>
                    <p class="text-gray-400">Rest under the stars in our curated wilderness camps.</p>
                </div>
                <div class="p-6 bg-[#052539] rounded-xl shadow-lg hover:scale-105 transition" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://cdn-icons-png.flaticon.com/512/809/809860.png" class="w-16 mx-auto mb-4" alt="">
                    <h3 class="text-2xl font-semibold mb-2">Community</h3>
                    <p class="text-gray-400">Join fellow explorers in our vibrant mountaineering club.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Routes Section --}}
    <section id="routes" class="py-24 bg-[#001219]">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-down">Popular Hiking Routes</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ([
                    ['img' => 'https://images.unsplash.com/photo-1549887534-4b6b6c56e0c1?auto=format&fit=crop&w=800&q=80', 'name' => 'Everest Base Trail'],
                    ['img' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80', 'name' => 'Mount Rinjani'],
                    ['img' => 'https://images.unsplash.com/photo-1520975918318-3f9e8f416935?auto=format&fit=crop&w=800&q=80', 'name' => 'Alpine Ridge'],
                ] as $route)
                <div class="rounded-xl overflow-hidden shadow-lg group" data-aos="fade-up">
                    <img src="{{ $route['img'] }}" alt="{{ $route['name'] }}" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div class="bg-[#052539] p-6">
                        <h3 class="text-2xl font-semibold">{{ $route['name'] }}</h3>
                        <p class="text-gray-400 mt-2">Experience breathtaking landscapes and serene trails.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="py-24 bg-[#0a3d62] text-center">
        <div class="max-w-xl mx-auto px-6" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6">Join the Adventure</h2>
            <p class="text-gray-300 mb-6">Subscribe to get updates about upcoming hikes, camps, and nature trips.</p>
            <form action="#" class="flex flex-col md:flex-row justify-center gap-4">
                <input type="email" placeholder="Enter your email" class="px-5 py-3 rounded-md text-gray-900 w-full md:w-2/3 focus:outline-none" required>
                <button type="submit" class="btn-glow bg-emerald-500 px-6 py-3 rounded-md font-semibold">Subscribe</button>
            </form>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="py-6 bg-[#001219] text-center text-gray-400 text-sm">
        © {{ date('Y') }} pendakian store
    </footer>

    {{-- Scripts --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
