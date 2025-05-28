<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steun het UFO Meldpunt - UFO Spot België</title>
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
        
        @keyframes pulse-heart {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        .pulse-heart { animation: pulse-heart 1.5s ease-in-out infinite; }
        
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

        .card-element {
            background: white;
            border-radius: 8px;
            padding: 12px;
            border: 2px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .card-element:focus-within {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
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

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-stars overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-space-blue/20 to-space-blue/40"></div>
        
        <!-- Floating elements -->
        <div class="absolute top-20 right-10 text-6xl float opacity-60">❤️</div>
        <div class="absolute bottom-32 left-16 text-4xl float opacity-40 pulse-heart" style="animation-delay: -2s;">💝</div>
        <div class="absolute top-32 left-1/4 text-5xl float opacity-50" style="animation-delay: -1s;">🛸</div>
        <div class="absolute bottom-20 right-1/4 text-3xl float opacity-40" style="animation-delay: -3s;">🌟</div>
        
        <div class="container mx-auto px-4 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h2 class="text-5xl md:text-6xl font-bold mb-6 gradient-text">
                    Steun het UFO Meldpunt
                </h2>
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto mb-8">
                    Help ons meldingen verzamelen en analyseren. Jouw donatie maakt het verschil in ons onderzoek naar het onbekende.
                </p>
                <div class="pulse-heart text-6xl mb-8">🙏</div>
            </div>


            <!-- Success Message -->
            <div id="success-message" class="hidden max-w-md mx-auto mb-8 bg-gradient-to-r from-alien-green/20 to-emerald-400/20 border border-alien-green/50 rounded-lg p-4 text-center">
                <div class="text-alien-green font-semibold">✅ Donatie succesvol ontvangen!</div>
            </div>

            <!-- Donation Form -->
            <div class="max-w-md mx-auto">
                <form id="payment-form" class="bg-gradient-to-b from-slate-800/80 to-slate-900/80 backdrop-blur-sm p-8 rounded-2xl border border-cosmic-purple/30 shadow-2xl">
                    <!-- Amount Selection -->
                     
                    <div class="mb-6">
                        <label class="block text-lg font-semibold text-alien-green mb-4">Kies je bedrag</label>

                        <div class="relative">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 font-bold">€</span>
                            <input type="number" id="amount" name="amount" class="w-full bg-slate-700/50 border border-slate-600 focus:border-alien-green focus:ring-2 focus:ring-alien-green/20 rounded-lg py-3 pl-8 pr-4 text-white placeholder-gray-400 transition-all duration-300" placeholder="Ander bedrag" min="1" required>
                        </div>
                    </div>

                    <!-- Card Element -->
                    <div class="mb-6">
                        <label class="block text-lg font-semibold text-alien-green mb-3">Kredietkaartgegevens</label>
                        <div id="card-element" class="card-element">
                            <!-- Stripe card element will be mounted here -->
                        </div>
                    </div>

                    <!-- Donate Button -->
                    <button type="submit" class="w-full bg-gradient-to-r from-alien-green to-emerald-400 hover:from-emerald-400 hover:to-alien-green text-white font-bold py-4 px-8 rounded-full text-lg transform hover:scale-105 transition-all duration-300 shadow-lg pulse-glow">
                        <span class="pulse-heart inline-block mr-2">❤️</span>
                        Doneer Nu
                    </button>
                </form>

                <!-- Trust Indicators -->
                <div class="mt-8 text-center space-y-4">
                    <div class="flex justify-center items-center space-x-4 text-gray-400">
                        <div class="flex items-center space-x-1">
                            <span class="text-alien-green">🔒</span>
                            <span class="text-sm">Veilig</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span class="text-alien-green">⚡</span>
                            <span class="text-sm">Snel</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span class="text-alien-green">💳</span>
                            <span class="text-sm">Stripe</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-400">
                        Je betaalgegevens worden veilig verwerkt door Stripe
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="py-20 bg-black/30">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold gradient-text mb-6">Waar Gaat Jouw Donatie Naartoe?</h3>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Elke euro helpt ons het UFO Meldpunt te verbeteren en uit te breiden
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-alien-green/30 text-center">
                    <div class="text-5xl mb-4">🖥️</div>
                    <h4 class="text-xl font-bold text-alien-green mb-4">Server & Hosting</h4>
                    <p class="text-gray-300">Betrouwbare servers om alle meldingen veilig op te slaan en 24/7 beschikbaar te houden.</p>
                </div>
                
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-cosmic-purple/30 text-center">
                    <div class="text-5xl mb-4">🔬</div>
                    <h4 class="text-xl font-bold text-cosmic-purple mb-4">Onderzoek & Analyse</h4>
                    <p class="text-gray-300">Geavanceerde tools en software voor het analyseren van foto's, video's en waarnemingspatronen.</p>
                </div>
                
                <div class="bg-gradient-to-b from-slate-800/50 to-slate-900/50 p-8 rounded-xl border border-star-yellow/30 text-center">
                    <div class="text-5xl mb-4">📱</div>
                    <h4 class="text-xl font-bold text-star-yellow mb-4">Platform Ontwikkeling</h4>
                    <p class="text-gray-300">Continue verbetering van de website en ontwikkeling van een mobiele app.</p>
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

    <!-- Stripe JavaScript -->
    <script src="https://js.stripe.com/v3/"></script>
    
    <script>


        // Mobile menu toggle
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
        </script>
        
        <script>

        // Stripe configuration
        const stripe = Stripe('pk_test_51RTf4BRmlIm6vZGfyKNUdKdas87yIHPhAakeuwsBgXPqWYrNbiVAGt8Dyo4JKBBse35lmELPfPJz8wEagSXGc1n3004sMKia4r');
        const elements = stripe.elements();
        const card = elements.create('card', {
            style: {
                base: {
                    fontSize: '16px',
                    color: '#1f2937',
                    fontFamily: 'system-ui, sans-serif',
                    '::placeholder': {
                        color: '#6b7280',
                    },
                },
            }
        });
        card.mount('#card-element');

        // Form submission
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const amount = document.getElementById('amount').value;
            if (!amount || amount < 1) {
                alert('Voer een geldig bedrag in');
                return;
            }
            
            const {token, error} = await stripe.createToken(card);
            if (error) {
                alert(error.message);
            } else {
                // In a real implementation, you would send this to your server
                console.log('Token created:', token.id);
                console.log('Amount:', amount);
                
                // Show success message and redirect
                document.getElementById('success-message').classList.remove('hidden');
                setTimeout(() => {
                    // Redirect to thank you page
                    window.location.href = '/donation/thankyou';
                }, 1500);
            }
        });
    </script>
</body>
</html>