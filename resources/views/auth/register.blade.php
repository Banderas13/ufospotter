
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFO Spot België - Register</title>
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
    <header class="bg-black/50 backdrop-blur-sm border-b border-cosmic-purple/30">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Terug naar home -->
            <a href="{{ url('/') }}" class="text-alien-green hover:text-emerald-400 transition-colors">
                ← Terug naar Home
            </a>
            
            <!-- Gecentreerde logo -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-br from-alien-green to-cosmic-purple rounded-full flex items-center justify-center pulse-glow">
                    <span class="text-xl">🛸</span>
                </div>
                <h1 class="text-2xl font-bold gradient-text">UFO Spot België</h1>
            </div>
            
            <!-- Lege div voor balans -->
            <div class="w-24"></div>
        </div>
    </nav>
</header>

    <!-- Register Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-stars overflow-hidden py-20">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-space-blue/20 to-space-blue/40"></div>
        
        <!-- Floating UFO -->
        <div class="absolute top-20 left-10 text-5xl float opacity-60">🛸</div>
        <div class="absolute bottom-40 right-20 text-4xl float opacity-40" style="animation-delay: -2s;">🌟</div>
        <div class="absolute top-1/3 right-1/4 text-3xl float opacity-30" style="animation-delay: -4s;">👽</div>
        <div class="absolute bottom-20 left-1/3 text-2xl float opacity-50" style="animation-delay: -1s;">✨</div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-lg mx-auto">
                <!-- Form Container -->
                <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/80 backdrop-blur-sm p-8 rounded-2xl border border-cosmic-purple/30 shadow-2xl">
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-alien-green to-cosmic-purple rounded-full flex items-center justify-center mx-auto mb-4 pulse-glow">
                            <span class="text-3xl">🛸</span>
                        </div>
                        <h2 class="text-3xl font-bold gradient-text mb-2">Join the Search</h2>
                        <p class="text-gray-400">Word lid van België's grootste UFO gemeenschap</p>
                    </div>
                    
                    <!-- Error Messages (Laravel Blade) -->
                    @if ($errors->any())
                        <div class="bg-red-500/20 border border-red-500/50 rounded-lg p-4 mb-6">
                            @foreach ($errors->all() as $error)
                                <div class="text-red-300 text-sm">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    
                    <!-- Register Form (Laravel Blade) -->
                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf
                        
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-300 mb-2">
                                Name
                            </label>
                            <input id="name" 
                                   type="text" 
                                   class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-alien-green focus:ring-2 focus:ring-alien-green/50 focus:outline-none transition-all duration-300 @error('name') border-red-500 @enderror" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   required 
                                   autocomplete="name" 
                                   autofocus
                                   placeholder="Your full name">
                            @error('name')
                                <div class="text-red-400 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-300 mb-2">
                                Email Address
                            </label>
                            <input id="email" 
                                   type="email" 
                                   class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-alien-green focus:ring-2 focus:ring-alien-green/50 focus:outline-none transition-all duration-300 @error('email') border-red-500 @enderror" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   required 
                                   autocomplete="email"
                                   placeholder="your@email.com">
                            @error('email')
                                <div class="text-red-400 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-300 mb-2">
                                Password
                            </label>
                            <input id="password" 
                                   type="password" 
                                   class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-alien-green focus:ring-2 focus:ring-alien-green/50 focus:outline-none transition-all duration-300 @error('password') border-red-500 @enderror" 
                                   name="password" 
                                   required 
                                   autocomplete="new-password"
                                   placeholder="Create a strong password">
                            @error('password')
                                <div class="text-red-400 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div>
                            <label for="password-confirm" class="block text-sm font-semibold text-gray-300 mb-2">
                                Confirm Password
                            </label>
                            <input id="password-confirm" 
                                   type="password" 
                                   class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-alien-green focus:ring-2 focus:ring-alien-green/50 focus:outline-none transition-all duration-300" 
                                   name="password_confirmation" 
                                   required 
                                   autocomplete="new-password"
                                   placeholder="Confirm your password">
                        </div>

                        <!-- Register Button -->
                        <button type="submit" class="w-full bg-gradient-to-r from-alien-green to-emerald-400 hover:from-emerald-400 hover:to-alien-green text-white font-bold py-3 px-6 rounded-lg text-lg transform hover:scale-105 transition-all duration-300 shadow-lg pulse-glow">
                            ✨ Create Account
                        </button>

                        <!-- Form Footer -->
                        <div class="text-center">
                            <div class="text-gray-400 text-sm">
                                Already have an account? 
                                <a href="{{ route('login') }}" class="text-alien-green hover:text-emerald-300 transition-colors font-semibold">Login here</a>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Additional Info -->
                <div class="mt-8 text-center text-gray-400 text-sm">
                    <p>🔒 Jouw privacy is belangrijk voor ons</p>
                </div>
            </div>
        </div>
    </section>