/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
      './app/Filament/**/*.php',
      './vendor/filament/**/*.blade.php',
  ],
  theme: {
      extend: {
          colors: {
              'ufo': {
                  'dark': '#1a1a2e',      // Dark navy blue
                  'deep': '#16213e',      // Deeper navy
                  'moss': '#0f3460',      // Dark blue-green
                  'blue': '#4fc3f7',      // Light blue
                  'mint': '#4dd0e1',      // Mint/cyan
                  'green': '#26a69a',     // Teal green
                  'grey': '#b0bec5',      // Light grey
              }
          }
      },
  },
  plugins: [],
}