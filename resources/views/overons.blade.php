<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Ons - UFO Spot België</title>
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
        
        @keyframes orbit {
            0% { transform: rotate(0deg) translateX(30px) rotate(0deg); }
            100% { transform: rotate(360deg) translateX(30px) rotate(-360deg); }
        }
        .orbit { animation: orbit 10s linear infinite; }
        
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
        
        .timeline-line {
            position: relative;
        }
        
        .timeline-line::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #10b981, #7c3aed);
            transform: translateX(-50%);
        }
        
        @media (max-width: 768px) {
            .timeline-line::before {
                left: 20px;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-b from-space-blue via-slate-900 to-space-blue text-white min-h-screen">
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
                    <a href="{{ route('mijn-meldingen') }}" class="hover:text-alien-green transition-colors">Mijn Meldingen</a>
                    <a href="{{ route('alle-meldingen') }}" class="hover:text-alien-green transition-colors">Alle Meldingen</a>
                    <a href="{{ route('overons') }}" class="text-alien-green transition-colors">Over Ons</a>
                    <a href="{{ route('contact') }}" class="hover:text-alien-green transition-colors">Contact</a>
                    
                </div>
            <div class="hidden md:flex space-x-8">
                <div class="flex items-center space-x-4">
                    @guest
                        <a href="{{ route('login') }}" 
                            class="bg-gradient-to-r from-cosmic-purple to-indigo-500 hover:from-indigo-500 hover:to-cosmic-purple text-white px-4 py-2 rounded-full text-sm font-medium transform hover:scale-105 transition-all duration-300 shadow-lg">
                            🔑 Login
                        </a>
                        <a href="{{ route('register') }}" 
                            class="border-2 border-alien-green text-alien-green hover:bg-alien-green hover:text-white px-4 py-2 rounded-full text-sm font-medium transform hover:scale-105 transition-all duration-300">
                            👽 Register
                        </a>
                    @else
                    <div class="flex items-center space-x-3">
                        <div class="flex items-center space-x-2 bg-gradient-to-r from-slate-800/80 to-slate-700/80 px-4 py-2 rounded-full border border-alien-green/30">
                            <span class="text-lg">👋</span>
                            <span class="text-alien-green font-medium">{{ Auth::user()->name }}</span>
                        </div>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" 
                                class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-full text-sm font-medium transform hover:scale-105 transition-all duration-300 shadow-lg">
                                🚪 Logout
                            </button>
                        </form>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
            
            <!-- Mobile navigation -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
                <a href="{{ route('home') }}" class="block py-2 hover:text-alien-green transition-colors">Home</a>
                <a href="{{ route('meld') }}" class="block py-2 hover:text-alien-green transition-colors">Meld</a>
                <a href="{{ route('mijn-meldingen') }}" class="block py-2 hover:text-alien-green transition-colors">Mijn Meldingen</a>
                <a href="{{ route('alle-meldingen') }}" class="block py-2 hover:text-alien-green transition-colors">Alle Meldingen</a>
                <a href="{{ route('overons') }}" class="block py-2 text-alien-green transition-colors">Over Ons</a>
                <a href="{{ route('contact') }}" class="block py-2 hover:text-alien-green transition-colors">Contact</a>
                
                <div class="flex items-center space-x-4">
                    @guest
                        <a href="{{ route('login') }}" 
                        class="bg-gradient-to-r from-cosmic-purple to-indigo-500 hover:from-indigo-500 hover:to-cosmic-purple text-white px-4 py-2 rounded-full text-sm font-medium transform hover:scale-105 transition-all duration-300 shadow-lg">
                            🔑 Login
                        </a>
                        <a href="{{ route('register') }}" 
                        class="border-2 border-alien-green text-alien-green hover:bg-alien-green hover:text-white px-4 py-2 rounded-full text-sm font-medium transform hover:scale-105 transition-all duration-300">
                            👽 Register
                        </a>
                    @else
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center space-x-2 bg-gradient-to-r from-slate-800/80 to-slate-700/80 px-4 py-2 rounded-full border border-alien-green/30">
                                <span class="text-lg">👋</span>
                                <span class="text-alien-green font-medium">{{ Auth::user()->name }}</span>
                            </div>
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" 
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-full text-sm font-medium transform hover:scale-105 transition-all duration-300 shadow-lg">
                                    🚪 Logout
                                </button>
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
            
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative py-20 bg-stars overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-space-blue/20 to-space-blue/40"></div>
        
        <!-- Floating elements -->
        <div class="absolute top-10 right-10 text-4xl float opacity-60">🌌</div>
        <div class="absolute bottom-20 left-16 text-3xl float opacity-40" style="animation-delay: -2s;">⭐</div>
        <div class="absolute top-32 left-1/4 text-2xl orbit opacity-50">🛸</div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-5xl md:text-6xl font-bold mb-6 gradient-text">
                Over UFO Spot België
            </h2>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                De waarheid zoeken, samen ontdekken, altijd open-minded blijven
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h3 class="text-4xl font-bold mb-6 gradient-text">Onze Missie</h3>
                    <div class="w-20 h-1 bg-gradient-to-r from-alien-green to-cosmic-purple mx-auto rounded-full"></div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                            UFO Spot België werd opgericht met één duidelijk doel: het creëren van een veilige, 
                            wetenschappelijke en respectvolle omgeving waar Belgische burgers hun buitengewone 
                            waarnemingen kunnen delen zonder angst voor spot of veroordeling.
                        </p>
                        <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                            Wij geloven dat elke waarneming, hoe ongewoon ook, verdient om serieus genomen te worden. 
                            Door systematisch gegevens te verzamelen en te analyseren, hopen we patronen te ontdekken 
                            die ons meer vertellen over deze mysterieuze verschijnselen.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-alien-green to-emerald-400 rounded-full flex items-center justify-center">
                                <span class="text-xl">🔍</span>
                            </div>
                            <span class="text-alien-green font-semibold text-lg">Onderzoek • Documentatie • Transparantie</span>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 p-8 rounded-2xl border border-cosmic-purple/30 backdrop-blur-sm">
                            <div class="text-center">
                                <div class="text-6xl mb-4">🌍</div>
                                <h4 class="text-2xl font-bold text-cosmic-purple mb-4">Landelijke Dekking</h4>
                                <p class="text-gray-300">Van Luxemburg tot aan de kust - we documenteren waarnemingen uit heel België</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-black/20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold mb-6 gradient-text">Onze Waarden</h3>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Deze principes vormen de basis van alles wat we doen
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-b from-slate-800/60 to-slate-900/60 p-8 rounded-xl border border-alien-green/30 hover:border-alien-green/60 transition-all duration-300 backdrop-blur-sm group">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">🔬</div>
                    <h4 class="text-2xl font-bold text-alien-green mb-4">Wetenschappelijk</h4>
                    <p class="text-gray-300">We benaderen elke melding met wetenschappelijke nieuwsgierigheid en rigoureuze analyse.</p>
                </div>
                
                <div class="bg-gradient-to-b from-slate-800/60 to-slate-900/60 p-8 rounded-xl border border-cosmic-purple/30 hover:border-cosmic-purple/60 transition-all duration-300 backdrop-blur-sm group">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">🤝</div>
                    <h4 class="text-2xl font-bold text-cosmic-purple mb-4">Respectvol</h4>
                    <p class="text-gray-300">Elke melder wordt met respect behandeld, ongeacht hoe ongewoon hun verhaal lijkt.</p>
                </div>
                
                <div class="bg-gradient-to-b from-slate-800/60 to-slate-900/60 p-8 rounded-xl border border-star-yellow/30 hover:border-star-yellow/60 transition-all duration-300 backdrop-blur-sm group">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">🔐</div>
                    <h4 class="text-2xl font-bold text-star-yellow mb-4">Vertrouwelijk</h4>
                    <p class="text-gray-300">Privacy en anonimiteit staan voorop - jouw gegevens zijn veilig bij ons.</p>
                </div>
                
                <div class="bg-gradient-to-b from-slate-800/60 to-slate-900/60 p-8 rounded-xl border border-pink-400/30 hover:border-pink-400/60 transition-all duration-300 backdrop-blur-sm group">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">🌐</div>
                    <h4 class="text-2xl font-bold text-pink-400 mb-4">Open-minded</h4>
                    <p class="text-gray-300">We staan open voor alle mogelijkheden en oordelen niet vooraf over waarnemingen.</p>
                </div>
                
                <div class="bg-gradient-to-b from-slate-800/60 to-slate-900/60 p-8 rounded-xl border border-orange-400/30 hover:border-orange-400/60 transition-all duration-300 backdrop-blur-sm group">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">📊</div>
                    <h4 class="text-2xl font-bold text-orange-400 mb-4">Transparant</h4>
                    <p class="text-gray-300">Onze methoden en bevindingen delen we transparant met de gemeenschap.</p>
                </div>
                
                <div class="bg-gradient-to-b from-slate-800/60 to-slate-900/60 p-8 rounded-xl border border-cyan-400/30 hover:border-cyan-400/60 transition-all duration-300 backdrop-blur-sm group">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">🎯</div>
                    <h4 class="text-2xl font-bold text-cyan-400 mb-4">Objectief</h4>
                    <p class="text-gray-300">We streven naar objectiviteit en laten feiten voor zichzelf spreken.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold mb-6 gradient-text">Ons Verhaal</h3>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Van kleine start-up tot Belgisch grootste UFO-platform
                </p>
            </div>
            
            <div class="relative max-w-4xl mx-auto timeline-line">
                <!-- Timeline Item 1 -->
                <div class="flex flex-col md:flex-row items-center mb-12">
                    <div class="md:w-1/2 md:pr-8 mb-4 md:mb-0">
                        <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 p-6 rounded-xl border border-alien-green/30 backdrop-blur-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-alien-green rounded-full flex items-center justify-center mr-3">
                                    <span class="text-sm font-bold text-black">1</span>
                                </div>
                                <span class="text-alien-green font-semibold">2019 - De Start</span>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Een Idee Wordt Realiteit</h4>
                            <p class="text-gray-300">Na jaren van gefragmenteerde UFO-meldingen besluit ons team een centraal platform te creëren voor alle belgische waarnemingen.</p>
                        </div>
                    </div>
                    <div class="hidden md:block w-4 h-4 bg-alien-green rounded-full border-4 border-space-blue"></div>
                    <div class="md:w-1/2 md:pl-8"></div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="flex flex-col md:flex-row items-center mb-12">
                    <div class="md:w-1/2 md:pr-8"></div>
                    <div class="hidden md:block w-4 h-4 bg-cosmic-purple rounded-full border-4 border-space-blue"></div>
                    <div class="md:w-1/2 md:pl-8 mb-4 md:mb-0">
                        <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 p-6 rounded-xl border border-cosmic-purple/30 backdrop-blur-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-cosmic-purple rounded-full flex items-center justify-center mr-3">
                                    <span class="text-sm font-bold text-white">2</span>
                                </div>
                                <span class="text-cosmic-purple font-semibold">2020 - Eerste Mijlpaal</span>
                            </div>
                            <h4 class="text-xl font-bold mb-2">100 Meldingen Bereikt</h4>
                            <p class="text-gray-300">Binnen het eerste jaar bereiken we onze eerste 100 geverifieerde meldingen uit heel België.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="flex flex-col md:flex-row items-center mb-12">
                    <div class="md:w-1/2 md:pr-8 mb-4 md:mb-0">
                        <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 p-6 rounded-xl border border-star-yellow/30 backdrop-blur-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-star-yellow rounded-full flex items-center justify-center mr-3">
                                    <span class="text-sm font-bold text-black">3</span>
                                </div>
                                <span class="text-star-yellow font-semibold">2022 - Samenwerking</span>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Academische Partners</h4>
                            <p class="text-gray-300">We starten samenwerkingen met Belgische & Nederlandse universiteiten voor wetenschappelijk onderzoek naar UFO-fenomenen.</p>
                        </div>
                    </div>
                    <div class="hidden md:block w-4 h-4 bg-star-yellow rounded-full border-4 border-space-blue"></div>
                    <div class="md:w-1/2 md:pl-8"></div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="flex flex-col md:flex-row items-center mb-12">
                    <div class="md:w-1/2 md:pr-8"></div>
                    <div class="hidden md:block w-4 h-4 bg-pink-400 rounded-full border-4 border-space-blue pulse-glow"></div>
                    <div class="md:w-1/2 md:pl-8 mb-4 md:mb-0">
                        <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 p-6 rounded-xl border border-pink-400/30 backdrop-blur-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-pink-400 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-sm font-bold text-white">4</span>
                                </div>
                                <span class="text-pink-400 font-semibold">2025 - Heden</span>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Marktleider</h4>
                            <p class="text-gray-300">Met meer dan 1.300 meldingen zijn we uitgegroeid tot België zijn grootste en meest vertrouwde UFO-platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-black/20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold mb-6 gradient-text">Ons Team</h3>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Gedreven professionals met een passie voor het onverklaarbare
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-alien-green to-emerald-400 rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">
                        👨‍🔬
                    </div>
                    <h4 class="text-xl font-bold mb-2">Dr. Senne Dewit</h4>
                    <p class="text-alien-green font-semibold mb-3">Hoofd professor</p>
                    <p class="text-gray-300 text-sm">Astrofysicus met 15 jaar ervaring in atmosferische fenomenen en ongeïdentificeerde luchtobjecten.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-star-yellow to-orange-400 rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">
                    🤵‍♂️
                    </div>
                    <h4 class="text-xl font-bold mb-2">Joren Vandervelden</h4>
                    <p class="text-star-yellow font-semibold mb-3">CEO</p>
                    <p class="text-gray-300 text-sm">Pionier die de grenzen tussen wetenschap en mysterie verkent - transformeerde een droom in het belgisch machtigste UFO-netwerk.</p>
                </div>

                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-cosmic-purple to-purple-500 rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">
                        👨‍💻
                    </div>
                    <h4 class="text-xl font-bold mb-2">Julio Raynier Castro Vargas</h4>
                    <p class="text-cosmic-purple font-semibold mb-3">Tech Lead</p>
                    <p class="text-gray-300 text-sm">Full-stack ontwikkelaar gespecialiseerd in data-analyse en gebruiksvriendelijke interfaces.</p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-4xl font-bold mb-6 gradient-text">Vragen of Suggesties?</h3>
                <p class="text-xl text-gray-300 mb-8">
                    We horen graag van je! Neem contact met ons op voor vragen over het platform, 
                    samenwerking of als je gewoon wilt praten over UFO's.
                </p>
                <button href="/contact" class="bg-gradient-to-r from-alien-green to-emerald-400 hover:from-emerald-400 hover:to-alien-green text-white font-bold py-4 px-8 rounded-full text-lg transform hover:scale-105 transition-all duration-300 shadow-lg pulse-glow">
                    Ga naar onze contact pagina!
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black/80 border-t border-slate-700 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-br from-alien-green to-cosmic-purple rounded-full flex items-center justify-center">
                            <span class="text-sm">🛸</span>
                        </div>
                        <h4 class="text-xl font-bold gradient-text">UFO Spot België</h4>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Belgisch grootste platform voor UFO-waarnemingen. 
                        Samen ontdekken we wat zich boven ons afspeelt.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-alien-green transition-colors">📧</a>
                        <a href="#" class="text-gray-400 hover:text-alien-green transition-colors">📱</a>
                        <a href="#" class="text-gray-400 hover:text-alien-green transition-colors">🐦</a>
                    </div>
                </div>
                
                <div>
                    <h5 class="font-semibold mb-4 text-alien-green">Navigatie</h5>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="/meld" class="text-gray-400 hover:text-white transition-colors">Meld</a></li>
                        <li><a href="/mijn-meldingen" class="text-gray-400 hover:text-white transition-colors">Mijn Meldingen</a></li>
                        <li><a href="/over-ons" class="text-gray-400 hover:text-white transition-colors">Over Ons</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-semibold mb-4 text-alien-green">Informatie</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Algemene Voorwaarden</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 UFO Spot Nederland. De waarheid is daar ergens. 🛸</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobile-menu');
            const button = event.target.closest('button');
            
            if (!menu.contains(event.target) && !button) {
                menu.classList.add('hidden');
            }
        });
        
        // Add intersection observer for timeline animations
        document.addEventListener('DOMContentLoaded', function() {
            const timeline