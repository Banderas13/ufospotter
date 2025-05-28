<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedankt voor je Donatie - UFO Spot België</title>
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
        
        @keyframes celebration {
            0%, 100% { transform: scale(1) rotate(0deg); }
            25% { transform: scale(1.1) rotate(-5deg); }
            75% { transform: scale(1.1) rotate(5deg); }
        }
        .celebration { animation: celebration 1s ease-in-out infinite; }
        
        @keyframes sparkle {
            0%, 100% { opacity: 0; transform: scale(0); }
            50% { opacity: 1; transform: scale(1); }
        }
        .sparkle { animation: sparkle 2s ease-in-out infinite; }
        
        @keyframes confetti-fall {
            0% { transform: translateY(-100vh) rotate(0deg); opacity: 1; }
            100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
        }
        .confetti { animation: confetti-fall 3s linear infinite; }
        
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

        .countdown {
            font-variant-numeric: tabular-nums;
        }

        @keyframes slide-up {
            0% { transform: translateY(50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        .slide-up { animation: slide-up 1s ease-out; }

        @keyframes twinkle {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }
        .twinkle { animation: twinkle 1.5s ease-in-out infinite; }
    </style>
</head>
<body class="bg-gradient-to-b from-space-blue via-slate-900 to-space-blue text-white min-h-screen overflow-x-hidden">
    
    <!-- Confetti Elements -->
    <div class="fixed inset-0 pointer-events-none z-10">
        <div class="confetti fixed text-2xl text-star-yellow" style="left: 10%; animation-delay: 0s;">🎉</div>
        <div class="confetti fixed text-2xl text-cosmic-purple" style="left: 20%; animation-delay: 0.5s;">✨</div>
        <div class="confetti fixed text-2xl text-alien-green" style="left: 30%; animation-delay: 1s;">🎊</div>
        <div class="confetti fixed text-2xl text-pink-400" style="left: 40%; animation-delay: 1.5s;">💝</div>
        <div class="confetti fixed text-2xl text-star-yellow" style="left: 50%; animation-delay: 2s;">⭐</div>
        <div class="confetti fixed text-2xl text-cosmic-purple" style="left: 60%; animation-delay: 0.3s;">✨</div>
        <div class="confetti fixed text-2xl text-alien-green" style="left: 70%; animation-delay: 0.8s;">🎉</div>
        <div class="confetti fixed text-2xl text-pink-400" style="left: 80%; animation-delay: 1.3s;">💖</div>
        <div class="confetti fixed text-2xl text-star-yellow" style="left: 90%; animation-delay: 1.8s;">🌟</div>
    </div>

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
                    <a href="/" class="hover:text-alien-green transition-colors">Home</a>
                    <a href="/meld" class="hover:text-alien-green transition-colors">Meld</a>
                    <a href="/mijn-meldingen" class="hover:text-alien-green transition-colors">Mijn Meldingen</a>
                    <a href="/over-ons" class="hover:text-alien-green transition-colors">Over Ons</a>
                    <a href="/contact" class="hover:text-alien-green transition-colors">Contact</a>

                </div>
            </div>
            
            <!-- Mobile navigation -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
                <a href="/" class="block py-2 hover:text-alien-green transition-colors">Home</a>
                <a href="/meld" class="block py-2 hover:text-alien-green transition-colors">Meld</a>
                <a href="/mijn-meldingen" class="block py-2 hover:text-alien-green transition-colors">Mijn Meldingen</a>
                <a href="/over-ons" class="block py-2 hover:text-alien-green transition-colors">Over Ons</a>
                <a href="/contact" class="block py-2 hover:text-alien-green transition-colors">Contact</a>

            </div>
        </nav>
    </header>

    <!-- Thank You Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-stars">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-space-blue/20 to-space-blue/40"></div>
        
        <!-- Floating celebration elements -->
        <div class="absolute top-20 right-10 text-6xl float opacity-70 celebration">🎉</div>
        <div class="absolute bottom-32 left-16 text-4xl twinkle">✨</div>
        <div class="absolute top-40 left-10 text-5xl sparkle">🌟</div>
        <div class="absolute bottom-20 right-20 text-4xl float celebration">🎊</div>
        <div class="absolute top-60 right-1/4 text-3xl twinkle">💫</div>
        <div class="absolute bottom-40 left-1/3 text-5xl sparkle">⭐</div>
        
        <div class="relative z-20 text-center max-w-4xl mx-auto px-6 slide-up">
            <!-- Main Thank You Message -->
            <div class="mb-12">
                <div class="text-8xl mb-8 celebration">🙏</div>
                <h1 class="text-6xl md:text-8xl font-bold mb-6 gradient-text">
                    BEDANKT!
                </h1>
                <div class="text-2xl md:text-3xl mb-8 text-gray-300">
                    Je donatie helpt ons de waarheid te onthullen
                </div>
            </div>

            <!-- Success Card -->
            <div class="bg-black/40 backdrop-blur-md border border-alien-green/30 rounded-2xl p-8 md:p-12 mb-12 pulse-glow">
                <div class="text-6xl mb-6 celebration">🛸</div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-alien-green">
                    Donatie Succesvol Ontvangen!
                </h2>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    Dankzij jouw genereuze bijdrage kunnen we onze missie voortzetten om UFO-waarnemingen 
                    in België te documenteren en te onderzoeken. Elke donatie brengt ons dichter bij het 
                    onthullen van de mysteries boven ons.
                </p>
                
                <!-- Impact Stats -->
                <div class="grid md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-cosmic-purple/20 rounded-xl p-6 border border-cosmic-purple/30">
                        <div class="text-3xl mb-2">📊</div>
                        <div class="text-2xl font-bold text-cosmic-purple mb-1">500+</div>
                        <div class="text-sm text-gray-400">Waarnemingen Geregistreerd</div>
                    </div>
                    <div class="bg-alien-green/20 rounded-xl p-6 border border-alien-green/30">
                        <div class="text-3xl mb-2">🔍</div>
                        <div class="text-2xl font-bold text-alien-green mb-1">24/7</div>
                        <div class="text-sm text-gray-400">Onderzoek & Analyse</div>
                    </div>
                    <div class="bg-star-yellow/20 rounded-xl p-6 border border-star-yellow/30">
                        <div class="text-3xl mb-2">🌟</div>
                        <div class="text-2xl font-bold text-star-yellow mb-1">100%</div>
                        <div class="text-sm text-gray-400">Transparantie</div>
                    </div>
                </div>
            </div>

            <!-- What's Next -->
            <div class="bg-black/30 backdrop-blur-md border border-cosmic-purple/20 rounded-2xl p-8 mb-12">
                <h3 class="text-2xl font-bold mb-6 text-cosmic-purple">Wat Gebeurt Er Nu?</h3>
                <div class="grid md:grid-cols-2 gap-6 text-left">
                    <div class="flex items-start space-x-4">
                        <div class="text-2xl mt-1">📧</div>
                        <div>
                            <h4 class="font-semibold mb-2">Bevestiging per E-mail</h4>
                            <p class="text-gray-400 text-sm">Je ontvangt binnen enkele minuten een bevestigingsmail met alle details van je donatie.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="text-2xl mt-1">📱</div>
                        <div>
                            <h4 class="font-semibold mb-2">Blijf op de Hoogte</h4>
                            <p class="text-gray-400 text-sm">Volg onze nieuwsbrief voor updates over nieuwe waarnemingen en onderzoeksresultaten.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="/" class="bg-alien-green hover:bg-alien-green/80 text-white px-8 py-4 rounded-full font-semibold transition-all transform hover:scale-105">
                    🏠 Terug naar Home
                </a>
                <a href="/meld" class="bg-cosmic-purple hover:bg-cosmic-purple/80 text-white px-8 py-4 rounded-full font-semibold transition-all transform hover:scale-105">
                    🛸 Nieuwe Waarneming Melden
                </a>
                <a href="/doneren" class="bg-star-yellow hover:bg-star-yellow/80 text-black px-8 py-4 rounded-full font-semibold transition-all transform hover:scale-105">
                    💝 Nog Eens Doneren
                </a>
            </div>
        </div>
    </section>

    <!-- Footer Message -->
    <footer class="relative bg-black/60 backdrop-blur-sm border-t border-cosmic-purple/30 py-12">
        <div class="container mx-auto px-6 text-center">
            <div class="text-4xl mb-4 float">🌌</div>
            <p class="text-xl text-gray-300 mb-4">
                "De waarheid is daar ergens... en dankzij jou komen we er steeds dichter bij."
            </p>
            <p class="text-gray-500">
                © 2025 UFO Spot België - Met veel dankbaarheid voor jouw steun
            </p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        // Add some extra sparkle effects
        document.addEventListener('DOMContentLoaded', function() {
            // Create additional floating elements
            const createFloatingElement = (emoji, delay) => {
                const element = document.createElement('div');
                element.innerHTML = emoji;
                element.className = 'fixed text-2xl pointer-events-none z-5 twinkle';
                element.style.left = Math.random() * 100 + '%';
                element.style.top = Math.random() * 100 + '%';
                element.style.animationDelay = delay + 's';
                document.body.appendChild(element);
                
                // Remove after animation
                setTimeout(() => {
                    element.remove();
                }, 10000);
            };

            // Create floating elements periodically
            setInterval(() => {
                const emojis = ['✨', '⭐', '🌟', '💫', '🔸'];
                const emoji = emojis[Math.floor(Math.random() * emojis.length)];
                createFloatingElement(emoji, Math.random() * 2);
            }, 3000);
        });
    </script>
</body>
</html>