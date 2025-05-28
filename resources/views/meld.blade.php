<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFO Melding - UFO Spot België</title>
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

        .form-input {
            background: rgba(15, 23, 42, 0.8);
            border: 2px solid rgba(124, 58, 237, 0.3);
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #10b981;
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
        }

        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-input-wrapper input[type=file] {
            position: absolute;
            left: -9999px;
        }

        .file-input-label {
            cursor: pointer;
            display: block;
            width: 100%;
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
                <a href="/meld" class="block py-2 text-alien-green font-semibold">Meld</a>
                <a href="/mijn-meldingen" class="block py-2 hover:text-alien-green transition-colors">Mijn Meldingen</a>
                <a href="/over-ons" class="block py-2 hover:text-alien-green transition-colors">Over Ons</a>
                <a href="/contact" class="block py-2 hover:text-alien-green transition-colors">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <section class="relative min-h-screen py-20 bg-stars overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-space-blue/20 to-space-blue/40"></div>
        
        <!-- Floating elements -->
        <div class="absolute top-20 right-10 text-4xl float opacity-40">🛸</div>
        <div class="absolute bottom-32 left-16 text-3xl float opacity-30" style="animation-delay: -2s;">⭐</div>
        <div class="absolute top-1/4 left-10 text-2xl float opacity-20" style="animation-delay: -4s;">👽</div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Page Header -->
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-6xl font-bold mb-6 gradient-text">
                        Meld Je UFO Waarneming
                    </h2>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-8">
                        Deel je buitenaardse ervaring met onze gemeenschap. Elke melding helpt ons de waarheid te ontdekken.
                    </p>
                    <div class="text-6xl mb-8">🛸</div>
                </div>

                <!-- Success Message -->
                @if(session('success'))
                    <div class="bg-gradient-to-r from-alien-green/20 to-emerald-400/20 border border-alien-green/50 text-alien-green px-6 py-4 rounded-lg mb-8 backdrop-blur-sm">
                        <div class="flex items-center">
                            <span class="text-2xl mr-3">✅</span>
                            <span class="font-semibold">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                <!-- Error Messages -->
                @if($errors->any())
                    <div class="bg-gradient-to-r from-red-500/20 to-pink-500/20 border border-red-500/50 text-red-300 px-6 py-4 rounded-lg mb-8 backdrop-blur-sm">
                        <div class="flex items-center mb-2">
                            <span class="text-2xl mr-3">⚠️</span>
                            <span class="font-semibold">Er zijn enkele problemen met je melding:</span>
                        </div>
                        <ul class="list-disc list-inside space-y-1 ml-8">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- UFO Melding Form -->
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 md:p-12 rounded-2xl border border-cosmic-purple/30 backdrop-blur-sm">
                    <form action="{{ route('meld.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf
                        
                        <!-- Basic Information -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-alien-green mb-3">
                                    🏷️ Titel van je Waarneming *
                                </label>
                                <input type="text" name="title" value="{{ old('title') }}" required 
                                       class="w-full px-4 py-3 rounded-lg form-input text-white" 
                                       placeholder="Bijv. Drie lichtjes boven Antwerpen" maxlength="255">
                                <p class="text-sm text-gray-400 mt-1">Geef je waarneming een korte, beschrijvende titel</p>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-alien-green mb-3">
                                    📍 Locatie *
                                </label>
                                <input type="text" name="location_name" value="{{ old('location_name') }}" required 
                                       class="w-full px-4 py-3 rounded-lg form-input text-white" 
                                       placeholder="Bijv. Antwerpen, Gent, Brussel" maxlength="255">
                                <p class="text-sm text-gray-400 mt-1">Stad, gemeente of specifieke locatie</p>
                            </div>
                        </div>

                        <!-- Date and Time -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-alien-green mb-3">
                                    📅 Datum van Waarneming *
                                </label>
                                <input type="date" name="date" value="{{ old('date') }}" required 
                                       max="{{ date('Y-m-d') }}"
                                       class="w-full px-4 py-3 rounded-lg form-input text-white">
                                <p class="text-sm text-gray-400 mt-1">Wanneer vond de waarneming plaats?</p>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-alien-green mb-3">
                                    ⏱️ Duur van Waarneming (minuten) *
                                </label>
                                <input type="number" name="observation_time" value="{{ old('observation_time') }}" required 
                                       min="1" max="1440"
                                       class="w-full px-4 py-3 rounded-lg form-input text-white" 
                                       placeholder="Bijv. 5">
                                <p class="text-sm text-gray-400 mt-1">Hoeveel minuten duurde de waarneming?</p>
                            </div>
                        </div>

                        <!-- Certainty Level -->
                        <div>
                            <label class="block text-sm font-semibold text-alien-green mb-3">
                                🎯 Zekerheid dat het Buitenaards was (1-10) *
                            </label>
                            <div class="grid grid-cols-5 md:grid-cols-10 gap-2">
                                @for($i = 1; $i <= 10; $i++)
                                    <label class="relative cursor-pointer">
                                        <input type="radio" name="certainty" value="{{ $i }}" 
                                               {{ old('certainty') == $i ? 'checked' : '' }}
                                               class="sr-only" required>
                                        <div class="certainty-option w-full h-12 bg-slate-700/50 border border-cosmic-purple/30 rounded-lg flex items-center justify-center text-white font-bold hover:bg-cosmic-purple/30 transition-all duration-200">
                                            {{ $i }}
                                        </div>
                                    </label>
                                @endfor
                            </div>
                            <div class="flex justify-between text-sm text-gray-400 mt-2">
                                <span>1 = Niet zeker</span>
                                <span>10 = Zeer zeker</span>
                            </div>
                        </div>

                        <!-- Description -->
                        <div>
                            <label class="block text-sm font-semibold text-alien-green mb-3">
                                📝 Beschrijving van je Waarneming *
                            </label>
                            <textarea name="description" required rows="8" 
                                      class="w-full px-4 py-3 rounded-lg form-input text-white resize-none" 
                                      placeholder="Beschrijf zo gedetailleerd mogelijk wat je hebt gezien. Denk aan:
- Vorm en grootte van het object
- Kleur en lichteffecten
- Bewegingspatroon
- Geluiden (of juist geen geluiden)
- Weersomstandigheden
- Wat je gevoel erbij was
- Andere aanwezige getuigen">{{ old('description') }}</textarea>
                            <p class="text-sm text-gray-400 mt-1">Hoe meer details, hoe beter we je waarneming kunnen analyseren</p>
                        </div>

                        <!-- Image Upload -->
                        <div>
                            <label class="block text-sm font-semibold text-alien-green mb-3">
                                📸 Foto van je Waarneming (optioneel)
                            </label>
                            <div class="file-input-wrapper">
                                <input type="file" name="image" id="image-upload" accept="image/*" onchange="updateFileName(this)">
                                <label for="image-upload" class="file-input-label">
                                    <div class="w-full px-4 py-6 rounded-lg form-input text-center cursor-pointer hover:border-alien-green/50 transition-all duration-200">
                                        <div class="text-4xl mb-2">📷</div>
                                        <div id="file-name" class="text-gray-300">
                                            Klik hier om een foto te uploaden
                                        </div>
                                        <div class="text-sm text-gray-400 mt-2">
                                            Toegestane formaten: JPG, PNG, GIF (max 10MB)
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center pt-6">
                            <button type="submit" 
                                    class="bg-gradient-to-r from-alien-green to-emerald-400 hover:from-emerald-400 hover:to-alien-green text-white font-bold py-4 px-12 rounded-full text-lg transform hover:scale-105 transition-all duration-300 shadow-xl pulse-glow">
                                🛸 Verstuur UFO Melding
                            </button>
                            <p class="text-sm text-gray-400 mt-4">
                                Door je melding in te dienen help je mee aan ons onderzoek naar het onbekende
                            </p>
                        </div>
                    </form>
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

        function updateFileName(input) {
            const fileNameElement = document.getElementById('file-name');
            if (input.files && input.files[0]) {
                fileNameElement.textContent = `Geselecteerd: ${input.files[0].name}`;
                fileNameElement.classList.add('text-alien-green');
            } else {
                fileNameElement.textContent = 'Klik hier om een foto te uploaden';
                fileNameElement.classList.remove('text-alien-green');
            }
        }

        // Add interactive effects for certainty radio buttons
        document.addEventListener('DOMContentLoaded', function() {
            const certaintyOptions = document.querySelectorAll('.certainty-option');
            
            certaintyOptions.forEach(option => {
                option.addEventListener('click', function() {
                    // Remove active class from all options
                    certaintyOptions.forEach(opt => {
                        opt.classList.remove('bg-alien-green', 'border-alien-green');
                        opt.classList.add('bg-slate-700/50', 'border-cosmic-purple/30');
                    });
                    
                    // Add active class to clicked option
                    option.classList.remove('bg-slate-700/50', 'border-cosmic-purple/30');
                    option.classList.add('bg-alien-green', 'border-alien-green');
                });
            });

            // Set initial state for old values
            const checkedInput = document.querySelector('input[name="certainty"]:checked');
            if (checkedInput) {
                const checkedOption = checkedInput.nextElementSibling;
                checkedOption.classList.remove('bg-slate-700/50', 'border-cosmic-purple/30');
                checkedOption.classList.add('bg-alien-green', 'border-alien-green');
            }
        });
    </script>
</body>
</html>
