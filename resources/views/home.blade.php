<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFO Spot Nederland - Meld Jouw Waarneming</title>
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
                    <a href="/" class="text-alien-green font-semibold">Home</a>
                    <a href="/meld" class="hover:text-alien-green transition-colors">Meld</a>
                    <a href="/mijn-meldingen" class="hover:text-alien-green transition-colors">Mijn Meldingen</a>
                    <a href="/over-ons" class="hover:text-alien-green transition-colors">Over Ons</a>
                    <a href="/contact" class="hover:text-alien-green transition-colors">Contact</a>
                </div>
            </div>
            
            <!-- Mobile navigation -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
                <a href="/" class="block py-2 text-alien-green font-semibold">Home</a>
                <a href="/meld" class="block py-2 hover:text-alien-green transition-colors">Meld</a>
                <a href="/mijn-meldingen" class="block py-2 hover:text-alien-green transition-colors">Mijn Meldingen</a>
                <a href="/over-ons" class="block py-2 hover:text-alien-green transition-colors">Over Ons</a>
                <a href="/contact" class="hover:text-alien-green transition-colors">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-stars overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-space-blue/20 to-space-blue/40"></div>
        
        <!-- Floating UFO -->
        <div class="absolute top-20 right-10 text-6xl float opacity-60">🛸</div>
        <div class="absolute bottom-32 left-16 text-4xl float opacity-40" style="animation-delay: -2s;">🌟</div>
        <div class="absolute top-14 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-4xl float opacity-40" style="animation-delay: -2s;">👽</div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-5xl md:text-7xl font-bold mb-6 gradient-text">
                Heb Jij Een UFO Gezien?
            </h2>
            <p class="text-xl md:text-2xl mb-8 text-gray-300 max-w-3xl mx-auto">
                Deel jouw buitenaardse waarneming met belgisch grootste UFO-gemeenschap. 
                Samen brengen we de waarheid aan het licht.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/meld" class="bg-gradient-to-r from-alien-green to-emerald-400 hover:from-emerald-400 hover:to-alien-green text-white font-bold py-4 px-8 rounded-full text-lg transform hover:scale-105 transition-all duration-300 shadow-lg pulse-glow">
                    🛸 Meld Nu Je Waarneming
                </a>
                <a href="/meldingen" class="border-2 border-cosmic-purple text-cosmic-purple hover:bg-cosmic-purple hover:text-white font-bold py-4 px-8 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                    📊 Bekijk Recente Meldingen
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-black/30">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="bg-gradient-to-b from-slate-800 to-slate-900 p-6 rounded-lg border border-cosmic-purple/30">
                    <div class="text-3xl font-bold text-alien-green mb-2">1,337</div>
                    <div class="text-gray-400">Totaal Meldingen</div>
                </div>
                <div class="bg-gradient-to-b from-slate-800 to-slate-900 p-6 rounded-lg border border-cosmic-purple/30">
                    <div class="text-3xl font-bold text-star-yellow mb-2">89</div>
                    <div class="text-gray-400">Deze Maand</div>
                </div>
                <div class="bg-gradient-to-b from-slate-800 to-slate-900 p-6 rounded-lg border border-cosmic-purple/30">
                    <div class="text-3xl font-bold text-cosmic-purple mb-2">10</div>
                    <div class="text-gray-400">Provinciën</div>
                </div>
                <div class="bg-gradient-to-b from-slate-800 to-slate-900 p-6 rounded-lg border border-cosmic-purple/30">
                    <div class="text-3xl font-bold text-pink-400 mb-2">24/7</div>
                    <div class="text-gray-400">Actief</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5W's Content Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h3 class="text-4xl font-bold text-center mb-16 gradient-text">De 5 W's van UFO Meldingen</h3>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- What -->
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-alien-green/30 hover:border-alien-green/60 transition-all duration-300 backdrop-blur-sm">
                    <div class="text-4xl mb-4">🤔</div>
                    <h4 class="text-2xl font-bold text-alien-green mb-4">Wat</h4>
                    <p class="text-gray-300 mb-4">Wat heb je precies waargenomen? Lichtjes, objecten, vreemde bewegingen aan de hemel?</p>
                    <p class="text-sm text-gray-400">Beschrijf vorm, grootte, kleur en gedrag van het object zo gedetailleerd mogelijk.</p>
                </div>

                <!-- When -->
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-cosmic-purple/30 hover:border-cosmic-purple/60 transition-all duration-300 backdrop-blur-sm">
                    <div class="text-4xl mb-4">⏰</div>
                    <h4 class="text-2xl font-bold text-cosmic-purple mb-4">Wanneer</h4>
                    <p class="text-gray-300 mb-4">Datum en tijd van je waarneming zijn cruciaal voor verificatie.</p>
                    <p class="text-sm text-gray-400">Ook weersomstandigheden helpen bij het analyseren van je melding.</p>
                </div>

                <!-- Where -->
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-star-yellow/30 hover:border-star-yellow/60 transition-all duration-300 backdrop-blur-sm">
                    <div class="text-4xl mb-4">📍</div>
                    <h4 class="text-2xl font-bold text-star-yellow mb-4">Waar</h4>
                    <p class="text-gray-300 mb-4">Locatie is essentieel - stad, straat of coördinaten maken het verschil.</p>
                    <p class="text-sm text-gray-400">Help ons patronen te ontdekken door je locatie nauwkeurig aan te geven.</p>
                </div>

                <!-- Who -->
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-pink-400/30 hover:border-pink-400/60 transition-all duration-300 backdrop-blur-sm">
                    <div class="text-4xl mb-4">👥</div>
                    <h4 class="text-2xl font-bold text-pink-400 mb-4">Wie</h4>
                    <p class="text-gray-300 mb-4">Had je getuigen? Meerdere waarnemers versterken de geloofwaardigheid.</p>
                    <p class="text-sm text-gray-400">Anoniem melden kan ook - jouw privacy staat voorop.</p>
                </div>

                <!-- Why -->
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-orange-400/30 hover:border-orange-400/60 transition-all duration-300 backdrop-blur-sm">
                    <div class="text-4xl mb-4">❓</div>
                    <h4 class="text-2xl font-bold text-orange-400 mb-4">Waarom</h4>
                    <p class="text-gray-300 mb-4">Waarom denk je dat dit buitengewoon was? Wat maakte het anders?</p>
                    <p class="text-sm text-gray-400">Je intuïtie en gevoel zijn belangrijke onderdelen van je melding.</p>
                </div>

                <!-- How -->
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-cyan-400/30 hover:border-cyan-400/60 transition-all duration-300 backdrop-blur-sm">
                    <div class="text-4xl mb-4">🔧</div>
                    <h4 class="text-2xl font-bold text-cyan-400 mb-4">Hoe</h4>
                    <p class="text-gray-300 mb-4">Hoe bewoog het object? Hoe lang duurde de waarneming?</p>
                    <p class="text-sm text-gray-400">Details over beweging en duur helpen ons je waarneming te categoriseren.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Sightings -->
    <section class="py-20 bg-black/20">
        <div class="container mx-auto px-4">
            <h3 class="text-4xl font-bold text-center mb-12 gradient-text">Recente Waarnemingen</h3>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-slate-800/60 p-6 rounded-lg border border-slate-700 hover:border-alien-green/50 transition-all duration-300">
                    <div class="flex justify-between items-start mb-4">
                        <span class="text-alien-green font-semibold">Antwerpen</span>
                        <span class="text-sm text-gray-400">2 uur geleden</span>
                    </div>
                    <p class="text-gray-300 mb-3">"Drie lichtjes in driehoekformatie, stilstaand boven de Schelde..."</p>
                    <div class="text-sm text-gray-500">👁️ 3 getuigen • ⭐ Geverifieerd</div>
                </div>
                
                <div class="bg-slate-800/60 p-6 rounded-lg border border-slate-700 hover:border-alien-green/50 transition-all duration-300">
                    <div class="flex justify-between items-start mb-4">
                        <span class="text-alien-green font-semibold">Gent</span>
                        <span class="text-sm text-gray-400">5 uur geleden</span>
                    </div>
                    <p class="text-gray-300 mb-3">"Snel bewegend object met pulserende lichten..."</p>
                    <div class="text-sm text-gray-500">👁️ 1 getuige • 📷 Foto beschikbaar</div>
                </div>
                
                <div class="bg-slate-800/60 p-6 rounded-lg border border-slate-700 hover:border-alien-green/50 transition-all duration-300">
                    <div class="flex justify-between items-start mb-4">
                        <span class="text-alien-green font-semibold">Brugge</span>
                        <span class="text-sm text-gray-400">1 dag geleden</span>
                    </div>
                    <p class="text-gray-300 mb-3">"Metalen schijfvormig object, geruisloos..."</p>
                    <div class="text-sm text-gray-500">👁️ 2 getuigen • 🎥 Video beschikbaar</div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <a href="/meldingen" class="border border-cosmic-purple text-cosmic-purple hover:bg-cosmic-purple hover:text-white font-semibold py-3 px-6 rounded-full transition-all duration-300">
                    Bekijk Alle Meldingen →
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-cosmic-purple/20 to-alien-green/20">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-4xl font-bold mb-6">Klaar Om Je Waarneming Te Delen?</h3>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Help mee aan het grootste UFO-onderzoek van België. Elke melding telt!
            </p>
            <a href="/meld" class="bg-gradient-to-r from-alien-green to-emerald-400 hover:from-emerald-400 hover:to-alien-green text-white font-bold py-4 px-12 rounded-full text-lg transform hover:scale-105 transition-all duration-300 shadow-xl pulse-glow">
                🛸 Start Je Melding Nu
            </a>
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
                        <li><a href="/meld" class="text-gray-400 hover:text-white transition-colors">Meld Waarneming</a></li>
                        <li><a href="/mijn-meldingen" class="text-gray-400 hover:text-white transition-colors">Mijn Meldingen</a></li>
                        <li><a href="/over-ons" class="text-gray-400 hover:text-white transition-colors">Over Ons</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-semibold mb-4 text-alien-green">Informatie</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Algemene Voorwaarden</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 UFO Spot België. De waarheid is daar ergens. 🛸</p>
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
        
        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add click handlers for buttons
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                if (!button.onclick && button.textContent.includes('Meld')) {
                    button.addEventListener('click', function() {
                        alert('Doorsturen naar UFO melding formulier...');
                    });
                }
            });
        });
    </script>
</body>
</html>