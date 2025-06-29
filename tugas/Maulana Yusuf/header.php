<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maulana Yusuf</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="modern.png" type="image/x-icon" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#fdf4ff',
                            100: '#fae8ff',
                            200: '#f5d0fe',
                            300: '#f0abfc',
                            400: '#e879f9',
                            500: '#d946ef',
                            600: '#c026d3',
                            700: '#a21caf',
                            800: '#86198f',
                            900: '#701a75',
                        },
                        accent: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            200: '#fed7aa',
                            300: '#fdba74',
                            400: '#fb923c',
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                            800: '#9a3412',
                            900: '#7c2d12',
                        },
                        dark: {
                            50: '#18181b',
                            100: '#27272a',
                            200: '#3f3f46',
                            300: '#52525b',
                            400: '#71717a',
                            500: '#a1a1aa',
                            600: '#d4d4d8',
                            700: '#e4e4e7',
                            800: '#f4f4f5',
                            900: '#fafafa',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(14, 165, 233, 0.3)' },
                            '100%': { boxShadow: '0 0 30px rgba(217, 70, 239, 0.4)' },
                        }
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
                    },
                }
            }
        }
    </script>
    <style>
        .glass-effect {
            background: rgba(24, 24, 27, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-dark {
            background: rgba(24, 24, 27, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-card {
            background: rgba(39, 39, 42, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9 0%, #d946ef 50%, #f97316 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.3);
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(90deg, #0ea5e9, #d946ef);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .sidebar-link {
            position: relative;
            transition: all 0.3s ease;
            border-radius: 8px;
        }
        
        .sidebar-link:hover {
            background: rgba(14, 165, 233, 0.2);
            transform: translateX(8px);
        }
        
        .sidebar-link.active {
            background: linear-gradient(135deg, #0ea5e9, #d946ef);
            color: white;
            font-weight: 600;
        }
        
        .hero-pattern {
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(14, 165, 233, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(217, 70, 239, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(249, 115, 22, 0.1) 0%, transparent 50%);
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        
        .floating-shapes::before,
        .floating-shapes::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.3), rgba(217, 70, 239, 0.3));
            animation: float 6s ease-in-out infinite;
            filter: blur(1px);
        }
        
        .floating-shapes::before {
            width: 200px;
            height: 200px;
            top: 20%;
            left: 10%;
            animation-delay: -2s;
        }
        
        .floating-shapes::after {
            width: 150px;
            height: 150px;
            bottom: 20%;
            right: 10%;
            animation-delay: -4s;
        }
        
        body {
            background: linear-gradient(135deg, #18181b 0%, #27272a 50%, #1e1e2e 100%);
            min-height: 100vh;
        }
        
        /* Form Styling */
        .form-input {
            background: rgba(39, 39, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #e4e4e7;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #0ea5e9;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
            background: rgba(39, 39, 42, 0.9);
        }
        
        .form-input::placeholder {
            color: #a1a1aa;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9, #d946ef);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #0284c7, #c026d3);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(14, 165, 233, 0.3);
        }
        
        /* Table Styling */
        .modern-table {
            background: rgba(39, 39, 42, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }
        
        .modern-table th {
            background: linear-gradient(135deg, #0ea5e9, #d946ef);
            color: white;
            padding: 16px 24px;
            text-align: left;
            font-weight: 600;
        }
        
        .modern-table td {
            padding: 16px 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: #e4e4e7;
        }
        
        .modern-table tr:hover {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .modern-table tr:last-child td {
            border-bottom: none;
        }
        
        /* Content sections */
        .content-section {
            background: rgba(39, 39, 42, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 32px;
            margin-bottom: 24px;
        }
        
        .section-title {
            color: #e4e4e7;
            font-size: 1.875rem;
            font-weight: 700;
            margin-bottom: 16px;
        }
        
        .section-text {
            color: #d4d4d8;
            line-height: 1.7;
        }
        
        /* Glowing elements */
        .glow-element {
            position: relative;
        }
        
        .glow-element::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #0ea5e9, #d946ef, #f97316);
            border-radius: inherit;
            z-index: -1;
            filter: blur(6px);
            opacity: 0.7;
            animation: glow 2s ease-in-out infinite alternate;
        }
    </style>
</head>
<body class="font-sans text-gray-100 transition-all duration-300">
    <div class="floating-shapes"></div>

    <nav class="glass-effect sticky top-0 z-50 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 flex items-center justify-center glow-element">
                        <span class="text-white font-bold">Y</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold gradient-text">Maulana Yusuf</h1>
                        <p class="text-sm text-gray-400">202243500894</p>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="nav-link text-gray-300 hover:text-primary-400 font-medium">Home</a>
                    <a href="biodata.php" class="nav-link text-gray-300 hover:text-primary-400 font-medium">Biodata</a>
                </div>
                
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button p-2 rounded-lg hover:bg-gray-800/50 transition-colors">
                        <i class="fas fa-bars text-gray-300"></i>
                    </button>
                </div>
            </div>
            
            <div class="mobile-menu hidden md:hidden glass-card rounded-lg mt-2 p-4 shadow-lg">
                <a href="index.php" class="block py-2 text-gray-300 hover:text-primary-400 font-medium">Home</a>
                <a href="biodata.php" class="block py-2 text-gray-300 hover:text-primary-400 font-medium">Biodata</a>
            </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.querySelector('.mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('backdrop-blur-xl');
            } else {
                nav.classList.remove('backdrop-blur-xl');
            }
        });
    </script>
</body>
</html>