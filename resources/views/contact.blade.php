<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - UFO Spot Nederland</title>
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
        
        @keyframes signal-pulse {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.1); }
        }
        .signal-pulse { animation: signal-pulse 3s ease-in-out infinite; }
        
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
        
        .form-input {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(124, 58, 237, 0.3);
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #10b981;
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
            outline: none;
        }
        
        .form-input::placeholder {
            color: rgba(156, 163, 175, 0.7);
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
                    <a href="/" class="text-alien-green font-semibold">Home</a>
                    <a href="/meld" class="hover:text-alien-green transition-colors">Meld</a>
                    <a href="/mijn-meldingen" class="hover:text-alien-green transition-colors">Mijn Meldingen</a>
                    <a href="/over-ons" class="hover:text-alien-green transition-colors">Over Ons</a>
                    <a href="/contact" class="hover:text-alien-green transition-colors">Contact</a>
                </div>
                <div>
    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @else
        <span>Welcome, {{ Auth::user()->name }}!</span>
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endguest
</div>
            
            <!-- Mobile navigation -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
                <a href="/" class="block py-2 hover:text-alien-green transition-colors">Home</a>
                <a href="/meld" class="block py-2 hover:text-alien-green transition-colors">Meld</a>
                <a href="/mijn-meldingen" class="block py-2 hover:text-alien-green transition-colors">Mijn Meldingen</a>
                <a href="/over-ons" class="block py-2 hover:text-alien-green transition-colors">Over Ons</a>
                <a href="/contact" class="block py-2 text-alien-green font-semibold">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative py-20 bg-stars overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-space-blue/20 to-space-blue/40"></div>
        
        <!-- Floating elements -->
        <div class="absolute top-10 right-10 text-4xl float opacity-60">📡</div>
        <div class="absolute bottom-20 left-16 text-3xl signal-pulse opacity-40">📶</div>
        <div class="absolute top-32 left-1/4 text-2xl float opacity-50" style="animation-delay: -1s;">💬</div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-5xl md:text-6xl font-bold mb-6 gradient-text">
                Neem Contact Op
            </h2>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                Heb je vragen, suggesties of wil je samenwerken? We horen graag van je!
            </p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-2xl border border-cosmic-purple/30 backdrop-blur-sm">
                        <div class="text-center mb-8">
                            <div class="text-4xl mb-4">💌</div>
                            <h3 class="text-3xl font-bold gradient-text mb-4">Stuur Ons Een Bericht</h3>
                            <p class="text-gray-300">Vul het formulier in en we nemen zo snel mogelijk contact met je op</p>
                        </div>
                        
                        <form class="space-y-6" onsubmit="handleSubmit(event)">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-alien-green mb-2">Voornaam *</label>
                                    <input type="text" required class="w-full px-4 py-3 rounded-lg form-input text-white" placeholder="Je voornaam">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-alien-green mb-2">Achternaam *</label>
                                    <input type="text" required class="w-full px-4 py-3 rounded-lg form-input text-white" placeholder="Je achternaam">
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-alien-green mb-2">Email Adres *</label>
                                <input type="email" required class="w-full px-4 py-3 rounded-lg form-input text-white" placeholder="je@email.nl">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-alien-green mb-2">Telefoon (optioneel)</label>
                                <input type="tel" class="w-full px-4 py-3 rounded-lg form-input text-white" placeholder="+31 6 1234 5678">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-alien-green mb-2">Onderwerp *</label>
                                <select required class="w-full px-4 py-3 rounded-lg form-input text-white">
                                    <option value="">Kies een onderwerp...</option>
                                    <option value="vraag">Algemene Vraag</option>
                                    <option value="technisch">Technische Ondersteuning</option>
                                    <option value="samenwerking">Samenwerking</option>
                                    <option value="media">Media & Pers</option>
                                    <option value="privacy">Privacy & Gegevens</option>
                                    <option value="feedback">Feedback & Suggesties</option>
                                    <option value="anders">Anders</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-alien-green mb-2">Bericht *</label>
                                <textarea required rows="6" class="w-full px-4 py-3 rounded-lg form-input text-white resize-none" placeholder="Beschrijf je vraag of opmerking zo gedetailleerd mogelijk..."></textarea>
                            </div>
                            
                            <div class="flex items-center space-x-3">
                                <input type="checkbox" id="privacy" required class="w-4 h-4 text-alien-green bg-transparent border-cosmic-purple rounded focus:ring-alien-green">
                                <label for="privacy" class="text-sm text-gray-300">
                                    Ik ga akkoord met de <a href="#" class="text-alien-green hover:underline">privacyverklaring</a> en het verwerken van mijn gegevens *
                                </label>
                            </div>
                            
                            <button type="submit" class="w-full bg-gradient-to-r from-alien-green to-emerald-400 hover:from-emerald-400 hover:to-alien-green text-white font-bold py-4 px-8 rounded-lg text-lg transform hover:scale-105 transition-all duration-300 shadow-lg pulse-glow">
                                🚀 Verstuur Bericht
                            </button>
                        </form>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="space-y-8">
                        <!-- Direct Contact -->
                        <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-2xl border border-alien-green/30 backdrop-blur-sm">
                            <div class="text-4xl mb-4">📞</div>
                            <h3 class="text-2xl font-bold text-alien-green mb-4">Direct Contact</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <span class="text-2xl">📧</span>
                                    <div>
                                        <p class="font-semibold">Email</p>
                                        <a href="mailto:info@ufospot.nl" class="text-gray-300 hover:text-alien-green transition-colors">info@ufospot.be</a>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="text-2xl">📱</span>
                                    <div>
                                        <p class="font-semibold">WhatsApp</p>
                                        <a href="tel:+31612345678" class="text-gray-300 hover:text-alien-green transition-colors">+32 6 1234 5678</a>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="text-2xl">🐦</span>
                                    <div>
                                        <p class="font-semibold">Social Media</p>
                                        <a href="#" class="text-gray-300 hover:text-alien-green transition-colors">@UFOSpotBE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Response Times -->
                        <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-2xl border border-cosmic-purple/30 backdrop-blur-sm">
                            <div class="text-4xl mb-4">⏱️</div>
                            <h3 class="text-2xl font-bold text-cosmic-purple mb-4">Reactietijd</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Spoedeisende UFO-meldingen</span>
                                    <span class="text-alien-green font-semibold">< 1 uur</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Algemene vragen</span>
                                    <span class="text-star-yellow font-semibold">< 24 uur</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Technische ondersteuning</span>
                                    <span class="text-pink-400 font-semibold">< 48 uur</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Samenwerkingsverzoeken</span>
                                    <span class="text-orange-400 font-semibold">< 1 week</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Office Hours -->
                        <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-2xl border border-star-yellow/30 backdrop-blur-sm">
                            <div class="text-4xl mb-4">🕐</div>
                            <h3 class="text-2xl font-bold text-star-yellow mb-4">UFO Watch 24/7</h3>
                            <p class="text-gray-300 mb-4">
                                Ons systeem is 24/7 operationeel voor spoedmeldingen. Voor andere vragen zijn we bereikbaar:
                            </p>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Maandag - Vrijdag</span>
                                    <span class="text-white">09:00 - 18:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Weekend</span>
                                    <span class="text-white">10:00 - 16:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">UFO Hotline</span>
                                    <span class="text-alien-green font-semibold">24/7 Actief</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-black/20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold mb-6 gradient-text">Veelgestelde Vragen</h3>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Antwoorden op de meest voorkomende vragen over contact en ondersteuning
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-6 rounded-xl border border-slate-700 hover:border-alien-green/50 transition-all duration-300 backdrop-blur-sm">
                        <div class="flex items-start space-x-4">
                            <div class="text-2xl">❓</div>
                            <div>
                                <h4 class="text-xl font-bold text-alien-green mb-2">Hoe snel krijg ik antwoord op mijn vraag?</h4>
                                <p class="text-gray-300">Voor spoedeisende UFO-meldingen reageren we binnen het uur. Algemene vragen beantwoorden we binnen 24 uur tijdens werkdagen.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-6 rounded-xl border border-slate-700 hover:border-cosmic-purple/50 transition-all duration-300 backdrop-blur-sm">
                        <div class="flex items-start space-x-4">
                            <div class="text-2xl">🔒</div>
                            <div>
                                <h4 class="text-xl font-bold text-cosmic-purple mb-2">Is mijn persoonlijke informatie veilig?</h4>
                                <p class="text-gray-300">Absoluut. We behandelen alle contactgegevens vertrouwelijk en delen deze nooit met derden zonder jouw expliciete toestemming.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-6 rounded-xl border border-slate-700 hover:border-star-yellow/50 transition-all duration-300 backdrop-blur-sm">
                        <div class="flex items-start space-x-4">
                            <div class="text-2xl">📞</div>
                            <div>
                                <h4 class="text-xl font-bold text-star-yellow mb-2">Kan ik ook telefonisch contact opnemen?</h4>
                                <p class="text-gray-300">Via WhatsApp zijn we het snelst bereikbaar. Voor complexere zaken plannen we graag een telefoongesprek in op een geschikt moment.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-6 rounded-xl border border-slate-700 hover:border-pink-400/50 transition-all duration-300 backdrop-blur-sm">
                        <div class="flex items-start space-x-4">
                            <div class="text-2xl">🚨</div>
                            <div>
                                <h4 class="text-xl font-bold text-pink-400 mb-2">Wat als ik net een UFO heb gezien?</h4>
                                <p class="text-gray-300">Gebruik direct onze UFO Hotline! We zijn 24/7 bereikbaar voor acute waarnemingen. Elke minuut telt bij het documenteren van verse meldingen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Contact -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="bg-gradient-to-r from-red-600/20 to-orange-500/20 p-8 rounded-2xl border border-red-500/50 backdrop-blur-sm">
                    <div class="text-6xl mb-6 signal-pulse">🚨</div>
                    <h3 class="text-4xl font-bold mb-6 text-red-400">UFO Noodlijn</h3>
                    <p class="text-xl text-gray-300 mb-8">
                        Zie je NU een UFO? Gebruik onze 24/7 spoedlijn voor directe hulp en begeleiding
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <button class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-bold py-4 px-8 rounded-full text-lg transform hover:scale-105 transition-all duration-300 shadow-lg pulse-glow">
                            📞 Bel UFO Hotline Nu
                        </button>
                        <button class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-4 px-8 rounded-full text-lg transform hover:scale-105 transition-all duration-300 shadow-lg">
                            💬 WhatsApp Spoed
                        </button>
                    </div>
                    
                    <p class="text-sm text-gray-400 mt-4">
                        Gemiddelde reactietijd: < 3 minuten | Beschikbaar in het Nederlands & Engels
                    </p>
                </div>
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
        
        function handleSubmit(event) {
            event.preventDefault();
            
            // Simple form validation and submission simulation
            const form = event.target;
            const formData = new FormData(form);
            
            // Show success message
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            submitButton.innerHTML = '✅ Bericht Verzonden!';
            submitButton.disabled = true;
            submitButton.classList.remove('hover:scale-105');
            submitButton.classList.add('bg-green-600');
            
            // Reset form after 3 seconds
            setTimeout(() => {
                form.reset();
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
                submitButton.classList.add('hover:scale-105');
                submitButton.classList.remove('bg-green-600');
                
                // Show confirmation
                alert('Bedankt voor je bericht! We nemen binnen 24 uur contact met je op. 🛸');
            }, 3000);
        }
        
        // Add form field animations
        document.addEventListener('DOMContentLoaded', function() {
            const formInputs = document.querySelectorAll('.form-input');
            
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.transform = 'scale(1.02)';
                });
                
                input.addEventListener('blur', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>