<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn UFO Meldingen - UFO Spot Nederland</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'space-blue': '#0f172a',
                        'cosmic-purple': '#7c3aed',
                        'alien-green': '#10b981',
                        'star-yellow': '#fbbf24'
                    }
                }
            }
        }
    </script>
    <style>
        /* Include the same animations and utility classes as home.blade.php if needed */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .float { animation: float 6s ease-in-out infinite; }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.3); }
            50% { box-shadow: 0 0 40px rgba(16, 185, 129, 0.6); }
        }
        .pulse-glow { animation: pulse-glow 2s ease-in-out infinite; }
        
        .bg-stars {
            background-image: 
                radial-gradient(2px 2px at 20px 30px, #ffffff, transparent),
                radial-gradient(2px 2px at 40px 70px, rgba(255,255,255,0.8), transparent),
                radial-gradient(1px 1px at 90px 40px, #ffffff, transparent),
                radial-gradient(1px 1px at 130px 80px, rgba(255,255,255,0.6), transparent),
                radial-gradient(2px 2px at 160px 30px, #ffffff, transparent);
            background-size: 200px 100px;
        }
        
        .gradient-text {
            background: linear-gradient(45deg, #10b981, #7c3aed, #fbbf24);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient-shift 3s ease infinite;
        }
        
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
    </style>
</head>
<body class="bg-gradient-to-b from-space-blue via-slate-900 to-space-blue text-white min-h-screen">
    <!-- Header -->
    <header class="bg-black/50 backdrop-blur-sm border-b border-cosmic-purple/30 sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-alien-green to-cosmic-purple rounded-full flex items-center justify-center pulse-glow">
                        <span class="text-xl">🛸</span>
                    </div>
                    <h1 class="text-2xl font-bold gradient-text">UFO Spot België</h1>
                </div>
                
                <!-- Mobile menu button -->
                <button class="md:hidden text-white" onclick="toggleMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                
                <!-- Desktop navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-alien-green transition-colors">Home</a>
                    <a href="{{ route('meld') }}" class="hover:text-alien-green transition-colors">Meld</a>
                    <a href="{{ route('mijn-meldingen') }}" class="text-alien-green font-semibold">Mijn Meldingen</a>
                    <a href="{{ route('overons') }}" class="hover:text-alien-green transition-colors">Over Ons</a>
                    <a href="{{ route('contact') }}" class="hover:text-alien-green transition-colors">Contact</a>
                </div>
                <div>
                @guest
                    <a href="{{ route('login') }}" class="hover:text-alien-green transition-colors">Login</a>
                    <a href="{{ route('register') }}" class="hover:text-alien-green transition-colors">Register</a>
                @else
                    <span class="text-gray-300">Welkom, {{ Auth::user()->name }}!</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline ml-4">
                        @csrf
                        <button type="submit" class="hover:text-alien-green transition-colors">Logout</button>
                    </form>
                @endguest
                </div>
            </div>
            
            <!-- Mobile navigation -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
                <a href="{{ route('home') }}" class="block py-2 hover:text-alien-green transition-colors">Home</a>
                <a href="{{ route('meld') }}" class="block py-2 hover:text-alien-green transition-colors">Meld</a>
                <a href="{{ route('mijn-meldingen') }}" class="block py-2 text-alien-green font-semibold">Mijn Meldingen</a>
                <a href="{{ route('overons') }}" class="block py-2 hover:text-alien-green transition-colors">Over Ons</a>
                <a href="{{ route('contact') }}" class="block py-2 hover:text-alien-green transition-colors">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <h2 class="text-4xl font-bold mb-8 gradient-text text-center">Mijn UFO Meldingen</h2>

        @if($gebeurtenissen->isEmpty())
            <div class="text-center text-gray-400 py-10">
                <p class="text-2xl mb-4">🛸</p>
                <p class="text-xl">Je hebt nog geen UFO meldingen gedaan.</p>
                <a href="{{ route('meld') }}" class="mt-6 inline-block bg-gradient-to-r from-alien-green to-emerald-400 hover:from-emerald-400 hover:to-alien-green text-white font-bold py-3 px-6 rounded-full text-lg transform hover:scale-105 transition-all duration-300 shadow-lg pulse-glow">
                    Doe je eerste melding!
                </a>
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($gebeurtenissen as $gebeurtenis)
                    <div class="bg-slate-800/60 p-6 rounded-xl border border-slate-700 hover:border-cosmic-purple/50 transition-all duration-300 backdrop-blur-sm">
                        <h3 class="text-2xl font-bold text-cosmic-purple mb-3">{{ $gebeurtenis->title }}</h3>
                        
                        @if($gebeurtenis->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $gebeurtenis->images->first()->path) }}" alt="{{ $gebeurtenis->title }}" class="rounded-lg mb-4 w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-slate-700 rounded-lg mb-4 flex items-center justify-center text-gray-500">
                                Geen afbeelding beschikbaar
                            </div>
                        @endif

                        <div class="flex justify-between mb-2">
                            <p class="text-gray-300"><span class="font-semibold text-alien-green">Locatie:</span> {{ $gebeurtenis->location }}</p>
                            <p class="text-gray-300"><span class="font-semibold text-alien-green">ObservatieTijd:</span> {{ \Carbon\Carbon::createFromTimestamp($gebeurtenis->observation_time * 60)->format('H:i') }}</p>
                        </div>
                        
                        <p class="text-gray-300 mb-3 leading-relaxed"><span class="font-semibold text-alien-green">Beschrijving:</span> {{ Str::limit($gebeurtenis->description, 150) }}</p>

                        <div>
                            <span class="font-semibold text-alien-green">Zekerheid:</span> {{ $gebeurtenis->certainty }}/10
                            <div class="flex items-center mt-1">
                                <span class="text-2xl">🧑</span>
                                <div class="w-full h-3 bg-slate-700 rounded-full mx-2 overflow-hidden">
                                    <div class="h-3 bg-gradient-to-r from-sky-400 to-cosmic-purple rounded-full" style="width: {{ ($gebeurtenis->certainty / 10) * 100 }}%;"></div>
                                </div>
                                <span class="text-2xl">👽</span>
                            </div>
                        </div>
                        
                        <p class="text-gray-400 text-sm mt-4"><span class="font-semibold text-alien-green">Gemeld op:</span> {{ $gebeurtenis->created_at->format('d M Y, H:i') }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-black/50 border-t border-cosmic-purple/30 mt-16">
        <div class="container mx-auto px-4 py-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} UFO Spot België. Alle rechten voorbehouden.</p>
            <p class="text-sm">Samen op zoek naar het onverklaarbare.</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
