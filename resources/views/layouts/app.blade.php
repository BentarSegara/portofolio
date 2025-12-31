<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>

    <!-- Menggunakan Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        slate: {
                            850: '#1e293b',
                            900: '#0f172a',
                            950: '#020617',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-20px)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #020617;
        }

        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }

        .glass-nav {
            background: rgba(2, 6, 23, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glass-card {
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .text-gradient {
            background: linear-gradient(to right, #f8fafc, #94a3b8);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-slate-950 text-slate-200 font-sans selection:bg-slate-700 selection:text-white overflow-x-hidden">

    <!-- Latar Belakang Dekoratif Global -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-slate-800 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-slate-700 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <!-- Header / Navbar -->
    <header class="fixed top-0 w-full z-50 glass-nav transition-all duration-300">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-xl font-bold tracking-wider text-white cursor-pointer hover:text-slate-300 transition-colors">
                PORTFOLIO<span class="text-slate-500">.</span>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8">
                @yield('header_menu')
            </nav>

            <!-- Mobile Menu Btn -->
            <button id="mobile-menu-btn" class="md:hidden text-slate-300 hover:text-white focus:outline-none">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-t border-slate-800 absolute w-full shadow-xl">
            <div class="flex flex-col p-4 space-y-4 text-center">
                @yield('header_menu_dropdown')
            </div>
        </div>
    </header>

    @yield('content');

    <!-- 4. FOOTER & CONTACT -->
    <footer id="contact" class="bg-slate-900 border-t border-slate-800 pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">

                <div class="mb-8 md:mb-0 text-center md:text-left">
                    <h2 class="text-2xl font-bold text-white mb-2">Mari Bekerja Sama</h2>
                    <p class="text-slate-400">Tertarik untuk membuat sesuatu yang hebat?</p>
                    <a href="mailto:email@anda.com" class="inline-block mt-4 text-xl font-semibold text-white hover:text-slate-300 border-b-2 border-slate-600 hover:border-white transition-all pb-1">
                        adesegoro@gmail.com
                    </a>
                </div>

                <div class="flex space-x-6">
                    <a href="https://www.linkedin.com/in/bentar-segara-buana-95051a28b/" class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-white hover:text-slate-900 transition-all duration-300">
                        <i class="fa-brands fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="https://github.com/BentarSegara" class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-white hover:text-slate-900 transition-all duration-300">
                        <i class="fa-brands fa-github text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-white hover:text-slate-900 transition-all duration-300">
                        <i class="fa-brands fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center text-slate-500 text-sm">
                <p>&copy; 2025 Bentar Segara Buana. All Rights Reserved.</p>
                <div class="mt-4 md:mt-0 space-x-4">
                    <a href="#" class="hover:text-slate-300">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        // Toggle Mobile Menu
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close menu when clicking links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                menu.classList.add('hidden');

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Header scroll effect
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });
    </script>
</body>

</html>