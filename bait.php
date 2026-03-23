<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Bachelor of Applied Information Technology (BAIT) | University of the Sacred Heart Gulu</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Bachelor of Applied Information Technology (BAIT) at the University of the Sacred Heart Gulu. A three-year degree program designed to provide practical IT skills in programming, web design, database systems, and network configuration.">
    <meta name="keywords" content="Information Technology, IT Degree, BAIT, USHG, Gulu University, Computer Science, Programming, Web Design, Database Systems">
    <meta name="author" content="University of the Sacred Heart Gulu">
    <meta property="og:image" content="https://ush.ac.ug/assets/img/logo.jpg">
    <meta property="og:title" content="Bachelor of Applied Information Technology (BAIT) | University of the Sacred Heart Gulu">
    <meta property="og:description" content="Transform your career with practical IT skills for the digital age">
    
    <!-- Google Fonts + Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ushg-green': '#063301',
                        'ushg-gold': '#ffc000',
                        'ushg-red': '#8F1402',
                        'ushg-dark': '#1a2a2c',
                        'ushg-light-green': '#0a4a03',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(100%)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                    },
                },
            },
        }
    </script>
    
    <style>
        * {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        
        /* Dropdown menu styles */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 240px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        @media (min-width: 1024px) {
            .group:hover .dropdown-menu {
                display: block;
                animation: fadeIn 0.2s ease-out;
            }
        }
        
        .mobile-dropdown-content {
            display: none;
        }
        .mobile-dropdown-content.show {
            display: block;
        }
        .mobile-menu {
            max-height: 70vh;
            overflow-y: auto;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .gradient-hero {
            background: linear-gradient(135deg, #063301 0%, #0a4a03 50%, #063301 100%);
        }
        .hover-lift {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 36px -12px rgba(0, 0, 0, 0.15);
        }
        .glass-card {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        .program-details {
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .program-item.active .expand-icon {
            transform: rotate(180deg);
        }
        .expand-icon {
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50 antialiased">

    <!-- Header - Modern Tailwind Header with Round Green Circle Logo -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex flex-col md:flex-row justify-between items-center gap-3">
                <!-- Logo with Round Green Circle Background -->
                <div class="flex items-center gap-3">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-br from-ushg-green to-ushg-light-green flex items-center justify-center shadow-md hover:scale-105 transition-transform duration-300">
                        <img src="https://ush.ac.ug/assets/img/logo.png" alt="University Logo" class="h-9 w-9 object-contain">
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg md:text-xl font-bold text-ushg-green leading-tight">University of the Sacred Heart Gulu</h1>
                        <span class="text-xs text-gray-500">Health of Mind, Heart and Body</span>
                    </div>
                </div>
                <div class="flex gap-3 flex-wrap justify-center">
                    <a href="https://ush.ac.ug/ush-elibrary" class="text-gray-600 text-sm hover:text-ushg-green transition flex items-center gap-1.5 px-2 py-1"><i class="fas fa-book text-xs"></i> E-Library</a>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSezQRYX65WOzC56NelVfn7JmT3_TLMD6_I19XCjPILtT-W5Ng/viewform?vc=0&c=0&w=1&flr=0&pli=1" target="_blank" class="text-gray-600 text-sm hover:text-ushg-green transition flex items-center gap-1.5 px-2 py-1"><i class="fas fa-user-graduate text-xs"></i> Apply</a>
                    <a href="support" class="text-gray-600 text-sm hover:text-ushg-green transition flex items-center gap-1.5 px-2 py-1"><i class="fas fa-hand-holding-heart text-xs"></i> Support</a>
                </div>
            </div>
        </div>
        
        <div class="bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-6">
                <div class="flex justify-between items-center">
                    <ul class="hidden lg:flex space-x-1">
                        <li class="relative group"><a href="index" class="block px-4 py-3 text-gray-700 font-medium hover:text-ushg-green transition">Home</a></li>
                        <li class="relative group"><a href="#" class="block px-4 py-3 text-gray-700 font-medium hover:text-ushg-green transition flex items-center gap-1">About USHG <i class="fas fa-chevron-down text-xs"></i></a>
                            <ul class="dropdown-menu"><li><a href="https://ush.ac.ug/about-us" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Who we are</a></li><li><a href="#" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Mission & Vision</a></li><li><a href="#" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Our History</a></li><li><a href="#" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Careers</a></li></ul>
                        </li>
                        <li class="relative group"><a href="#" class="block px-4 py-3 text-gray-700 font-medium hover:text-ushg-green transition flex items-center gap-1">Governance <i class="fas fa-chevron-down text-xs"></i></a>
                            <ul class="dropdown-menu"><li><a href="https://archdiocesegulu.org/" target="_blank" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Archdiocese of Gulu</a></li><li><a href="chancellor" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">University Chancellor</a></li><li><a href="council-members" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">University Council</a></li><li><a href="senate-members" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">University Senate</a></li><li><a href="https://ush.ac.ug/management-team" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">University Management</a></li></ul>
                        </li>
                        <li class="relative group"><a href="#" class="block px-4 py-3 text-gray-700 font-medium hover:text-ushg-green transition flex items-center gap-1">Academics <i class="fas fa-chevron-down text-xs"></i></a>
                            <ul class="dropdown-menu"><li><a href="programs" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Undergraduate Programs</a></li><li><a href="programs" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Postgraduate Programs</a></li><li><a href="faculty" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Our Faculty</a></li><li><a href="research" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Research Centers</a></li></ul>
                        </li>
                        <li class="relative group"><a href="#" class="block px-4 py-3 text-gray-700 font-medium hover:text-ushg-green transition flex items-center gap-1">Community Engagement <i class="fas fa-chevron-down text-xs"></i></a>
                            <ul class="dropdown-menu"><li><a href="#" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Counselling Unit</a></li><li><a href="#" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Computer Training</a></li><li><a href="#" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Financial Literacy</a></li><li><a href="#" class="block px-5 py-3 text-gray-700 hover:bg-gray-50 hover:text-ushg-green transition">Outreach Programs</a></li></ul>
                        </li>
                        <li class="relative group"><a href="https://ush.ac.ug/USHG-campus-life" class="block px-4 py-3 text-gray-700 font-medium hover:text-ushg-green transition">Campus Life</a></li>
                        <li class="relative group"><a href="https://ush.ac.ug/news-events" class="block px-4 py-3 text-gray-700 font-medium hover:text-ushg-green transition">News & Events</a></li>
                    </ul>
                    <div class="flex items-center gap-4 lg:hidden">
                        <div class="search-icon text-gray-600 text-xl cursor-pointer hover:text-ushg-green transition"><i class="fas fa-search"></i></div>
                        <button id="mobileMenuToggle" class="text-gray-600 text-2xl focus:outline-none hover:text-ushg-green transition"><i class="fas fa-bars"></i></button>
                    </div>
                    <div class="hidden lg:block search-icon text-gray-500 text-xl cursor-pointer hover:text-ushg-green transition ml-4"><i class="fas fa-search"></i></div>
                </div>
            </div>
        </div>
        
        <div id="mobileMenu" class="hidden lg:hidden bg-white border-t border-gray-100 shadow-lg mobile-menu">
            <div class="py-3 px-4 space-y-1">
                <a href="index" class="block py-3 text-gray-700 font-medium hover:bg-gray-50 hover:text-ushg-green rounded-lg px-3 transition">Home</a>
                <div class="mobile-dropdown"><button class="mobile-dropdown-btn w-full flex justify-between items-center py-3 text-gray-700 font-medium hover:bg-gray-50 hover:text-ushg-green rounded-lg px-3 transition"><span>About USHG</span><i class="fas fa-chevron-down text-xs transition-transform"></i></button><div class="mobile-dropdown-content hidden pl-4 space-y-1"><a href="https://ush.ac.ug/about-us" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Who we are</a><a href="#" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Mission & Vision</a><a href="#" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Our History</a></div></div>
                <div class="mobile-dropdown"><button class="mobile-dropdown-btn w-full flex justify-between items-center py-3 text-gray-700 font-medium hover:bg-gray-50 hover:text-ushg-green rounded-lg px-3 transition"><span>Governance</span><i class="fas fa-chevron-down text-xs transition-transform"></i></button><div class="mobile-dropdown-content hidden pl-4 space-y-1"><a href="https://archdiocesegulu.org/" target="_blank" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Archdiocese of Gulu</a><a href="chancellor" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">University Chancellor</a><a href="council-members" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">University Council</a><a href="senate-members" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">University Senate</a><a href="management-team" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">University Management</a></div></div>
                <div class="mobile-dropdown"><button class="mobile-dropdown-btn w-full flex justify-between items-center py-3 text-gray-700 font-medium hover:bg-gray-50 hover:text-ushg-green rounded-lg px-3 transition"><span>Academics</span><i class="fas fa-chevron-down text-xs transition-transform"></i></button><div class="mobile-dropdown-content hidden pl-4 space-y-1"><a href="programs" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Programs</a><a href="faculty" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Faculty</a><a href="research" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Research</a></div></div>
                <div class="mobile-dropdown"><button class="mobile-dropdown-btn w-full flex justify-between items-center py-3 text-gray-700 font-medium hover:bg-gray-50 hover:text-ushg-green rounded-lg px-3 transition"><span>Community Engagement</span><i class="fas fa-chevron-down text-xs transition-transform"></i></button><div class="mobile-dropdown-content hidden pl-4 space-y-1"><a href="#" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Counselling Unit</a><a href="#" class="block py-2.5 text-gray-600 hover:text-ushg-green rounded-lg px-3 transition">Computer Training</a></div></div>
                <a href="https://ush.ac.ug/USHG-campus-life" class="block py-3 text-gray-700 font-medium hover:bg-gray-50 hover:text-ushg-green rounded-lg px-3 transition">Campus Life</a>
                <a href="https://ush.ac.ug/news-events" class="block py-3 text-gray-700 font-medium hover:bg-gray-50 hover:text-ushg-green rounded-lg px-3 transition">News & Events</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gradient-hero text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-6 md:px-8 py-16 lg:py-24">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 text-center lg:text-left animate-fade-in">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-1.5 text-sm font-medium border border-white/20">
                        <i class="fas fa-laptop-code text-sm"></i>
                        <span>Undergraduate Program</span>
                        <span class="w-1 h-1 bg-white/50 rounded-full"></span>
                        <span>3 Years</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight">
                        Bachelor of Applied<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-ushg-gold to-yellow-400">Information Technology (BAIT)</span>
                    </h1>
                    <p class="text-xl text-gray-200 max-w-2xl mx-auto lg:mx-0">
                        Develop practical IT skills in programming, web design, database systems, and network configuration for the digital age.
                    </p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-3 pt-2">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl px-5 py-2 flex items-center gap-2">
                            <i class="fas fa-clock"></i>
                            <span class="font-semibold">3 Years</span>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl px-5 py-2 flex items-center gap-2">
                            <i class="fas fa-laptop"></i>
                            <span>Weekend & Online Modes</span>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl px-5 py-2 flex items-center gap-2">
                            <i class="fas fa-trophy"></i>
                            <span>Bachelor's Degree</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-4">
                        <a href="#details" class="bg-ushg-gold hover:bg-yellow-500 text-ushg-green font-bold px-8 py-3 rounded-full transition-all shadow-lg hover:shadow-xl inline-flex items-center gap-2">
                            <i class="fas fa-book-open"></i>
                            <span>Program Details</span>
                        </a>
                        <a href="#apply" class="bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/40 text-white font-medium px-7 py-3 rounded-full transition-all inline-flex items-center gap-2">
                            <i class="fas fa-arrow-right"></i>
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="glass-card rounded-3xl p-6 w-full max-w-sm shadow-2xl">
                        <div class="text-center mb-4">
                            <i class="fas fa-laptop-code text-5xl text-ushg-gold"></i>
                        </div>
                        <p class="text-center font-semibold text-xl">ICT Champions</p>
                        <p class="text-center text-sm text-gray-200">Creating sustainable projects for socio-economic transformation</p>
                        <hr class="my-3 border-white/20">
                        <div class="flex justify-between text-sm">
                            <div class="flex items-center gap-1"><i class="fas fa-calendar-alt text-sm"></i> <span>Intake: August 2026</span></div>
                            <div class="flex items-center gap-1"><i class="fas fa-globe text-sm"></i> <span>Weekend & Online</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg viewBox="0 0 1200 100" preserveAspectRatio="none" class="relative block w-full h-8 md:h-12">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="white" opacity=".3"></path>
                <path d="M0,0V15.81C13,21.25,27.93,25.67,44.24,28.45c69.76,10.19,140.09,9.45,210.06-1.45,69-10.73,136.2-30.58,206.52-35.28C532.38,11.89,612.3,25.61,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="white"></path>
            </svg>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-6 md:px-8 py-16 lg:py-20">
        <!-- Program Overview -->
        <div id="program" class="scroll-mt-24 mb-20">
            <div class="grid lg:grid-cols-3 gap-10">
                <div class="lg:col-span-2 space-y-5">
                    <div class="inline-flex items-center gap-2 bg-ushg-green/10 text-ushg-green px-3 py-1 rounded-full text-sm font-semibold">
                        <i class="fas fa-laptop-code text-sm"></i>
                        <span>Program Overview</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Practical IT Skills for the Digital Age</h2>
                    <p class="text-gray-600 leading-relaxed text-lg">The <strong class="text-ushg-green">Bachelor of Applied Information Technology (BAIT)</strong> is a three-year full-time degree designed to provide students with the conceptual and practical IT skills required by industry. The curriculum emphasizes business, manufacturing, media, and communication skills necessary for employment in today's ICT sector. It focuses on eight broad knowledge areas: Information Management, Research and Development, Embedded Systems, Web and Mobile Technologies, Project Management, Databases, Computer Networks, and IT Innovations. The program aims to create <strong class="text-ushg-green">"ICT champions"</strong> capable of delivering sustainable projects to transform socio-economic development.</p>
                    <div class="grid sm:grid-cols-2 gap-4 pt-2">
                        <div class="flex items-start gap-3 bg-white p-5 rounded-2xl shadow-md border border-gray-100 hover-lift">
                            <i class="fas fa-code text-ushg-green text-2xl"></i>
                            <div><h4 class="font-bold">Programming & Development</h4><p class="text-gray-500 text-sm">Master programming languages and software development principles</p></div>
                        </div>
                        <div class="flex items-start gap-3 bg-white p-5 rounded-2xl shadow-md border border-gray-100 hover-lift">
                            <i class="fas fa-database text-ushg-green text-2xl"></i>
                            <div><h4 class="font-bold">Database & Networks</h4><p class="text-gray-500 text-sm">Design databases and configure computer networks</p></div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-ushg-green/5 to-ushg-gold/5 p-7 rounded-3xl shadow-md border border-ushg-green/10">
                    <div class="flex items-center gap-2 mb-4">
                        <i class="fas fa-gem text-ushg-gold text-2xl"></i>
                        <h3 class="text-xl font-bold text-gray-800">Program Highlights</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex gap-2 items-start"><i class="fas fa-check-circle text-ushg-green text-sm mt-0.5"></i><span>Three-year comprehensive undergraduate program</span></li>
                        <li class="flex gap-2 items-start"><i class="fas fa-check-circle text-ushg-green text-sm mt-0.5"></i><span>Weekend and Online learning modes available</span></li>
                        <li class="flex gap-2 items-start"><i class="fas fa-check-circle text-ushg-green text-sm mt-0.5"></i><span>Mandatory Industrial Training (6 weeks)</span></li>
                        <li class="flex gap-2 items-start"><i class="fas fa-check-circle text-ushg-green text-sm mt-0.5"></i><span>Two dedicated computer laboratories</span></li>
                        <li class="flex gap-2 items-start"><i class="fas fa-check-circle text-ushg-green text-sm mt-0.5"></i><span>ICT for socio-economic development focus</span></li>
                        <li class="flex gap-2 items-start"><i class="fas fa-check-circle text-ushg-green text-sm mt-0.5"></i><span>Addresses the digital divide in rural communities</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Course Details Section - Accordion Style -->
        <div id="details" class="scroll-mt-24 mb-20">
            <div class="text-center mb-10">
                <div class="inline-flex items-center gap-2 bg-ushg-green/10 text-ushg-green px-4 py-1 rounded-full text-sm font-semibold">
                    <i class="fas fa-graduation-cap text-sm"></i>
                    <span>Comprehensive Curriculum</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-4">Program Details & Structure</h2>
                <p class="text-gray-500 max-w-2xl mx-auto mt-2">Designed to equip you with practical IT skills for the modern workplace</p>
            </div>
            
            <!-- Program Accordion -->
            <div class="program-item bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
                <div class="program-header cursor-pointer p-6 md:p-8 flex justify-between items-center border-l-4 border-ushg-green bg-white">
                    <h3 class="text-xl md:text-2xl font-bold text-ushg-green pr-4">Bachelor of Applied Information Technology (BAIT)</h3>
                    <button class="expand-btn w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center flex-shrink-0 hover:bg-gray-200 transition shadow-sm">
                        <i class="fas fa-chevron-down text-gray-600 expand-icon text-xl"></i>
                    </button>
                </div>
                <div class="program-details max-h-0 overflow-hidden transition-all duration-400">
                    <div class="p-6 md:p-8 pt-0 border-t border-gray-100">
                        <div class="grid md:grid-cols-2 gap-8">
                            <!-- Left Column -->
                            <div>
                                <h4 class="font-bold text-ushg-green text-lg mb-4 flex items-center gap-2"><i class="fas fa-info-circle text-ushg-gold"></i> Course Information</h4>
                                <p class="text-gray-600 text-base leading-relaxed mb-4">The Bachelor of Applied Information Technology (BAIT) is a three-year full-time degree program offered by the Faculty of Arts and Social Sciences, ICT Department at the University of the Sacred Heart Gulu. The program is designed to provide students with the conceptual and practical IT skills required by industry, emphasizing business, manufacturing, media, and communication skills necessary for employment in today's ICT sector.</p>
                                <p class="text-gray-600 text-base leading-relaxed mb-4">The curriculum focuses on eight broad knowledge areas: Information Management, Research and Development, Embedded Systems, Web and Mobile Technologies, Project Management, Databases, Computer Networks, and IT Innovations. The program aims to create "ICT champions" capable of delivering sustainable projects to transform socio-economic development.</p>
                                <p class="text-gray-600 text-base leading-relaxed">Teaching methodologies include lectures, workshops, tutorials, case studies, seminars, practical laboratory work, field work, and individual readings. The program is offered in two modes: Weekend and Online (via an e-learning portal).</p>
                                <div class="mt-6 p-5 bg-ushg-green/5 rounded-xl">
                                    <p class="text-gray-700"><strong class="text-ushg-green text-lg">Duration:</strong> <span class="text-gray-800">3 years (6 semesters + 2 recess terms)</span></p>
                                    <p class="text-gray-700 mt-2"><strong class="text-ushg-green">Study Mode:</strong> Weekend & Online (e-learning)</p>
                                    <p class="text-gray-700 mt-2"><strong class="text-ushg-green">Assessment:</strong> Coursework 30% | Examination 70%</p>
                                    <p class="text-gray-700 mt-2"><strong class="text-ushg-green">Award:</strong> Bachelor of Applied Information Technology (BAIT)</p>
                                </div>
                            </div>
                            
                            <!-- Right Column -->
                            <div>
                                <h4 class="font-bold text-ushg-green text-lg mb-4 flex items-center gap-2"><i class="fas fa-graduation-cap text-ushg-gold"></i> Entry Requirements</h4>
                                <ul class="text-gray-600 text-base space-y-3 mb-6 list-disc pl-5">
                                    <li><strong>Direct Entry:</strong> At least five passes at UCE and two principal passes at UACE in any two subjects obtained at the same sitting.</li>
                                    <li><strong>Diploma Holders:</strong> A Credit/Second Class Diploma in any discipline from a recognized institution.</li>
                                    <li><strong>Mature Age:</strong> Passing the mature age examinations set by the University.</li>
                                    <li><strong>Additional Criteria:</strong> A minimum weighted point set by the Admissions Board.</li>
                                </ul>
                                
                                <h4 class="font-bold text-ushg-green text-lg mb-4 flex items-center gap-2"><i class="fas fa-chalkboard-user text-ushg-gold"></i> Core Modules</h4>
                                <ul class="text-gray-600 text-base space-y-2 mb-6 list-disc pl-5">
                                    <li>Introduction to ICT</li>
                                    <li>Discrete Mathematics</li>
                                    <li>Introduction to Database Systems</li>
                                    <li>Internet Technology and Web Design</li>
                                    <li>Systems Analysis and Design</li>
                                    <li>Object-Oriented Programming</li>
                                    <li>Computer Networks & Data Communication</li>
                                    <li>Research Methodology in Computing</li>
                                    <li>Mobile Application Development</li>
                                    <li>Software Engineering Principles</li>
                                </ul>
                                
                                <h4 class="font-bold text-ushg-green text-lg mb-4 flex items-center gap-2"><i class="fas fa-briefcase text-ushg-gold"></i> Career Opportunities</h4>
                                <ul class="text-gray-600 text-base space-y-2 list-disc pl-5">
                                    <li>Web Designer & Programmer</li>
                                    <li>System Analyst</li>
                                    <li>IT Project Manager</li>
                                    <li>Information Systems Specialist</li>
                                    <li>IT Company Secretary</li>
                                    <li>IT Lecturer</li>
                                    <li>Network Administrator</li>
                                    <li>Database Administrator</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose This Program -->
        <div class="grid md:grid-cols-3 gap-8 mb-20">
            <div class="bg-white rounded-3xl p-7 shadow-md border border-gray-100 hover-lift text-center">
                <div class="w-16 h-16 bg-ushg-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-laptop-code text-ushg-green text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Practical IT Skills</h3>
                <p class="text-gray-600 text-sm">Gain hands-on experience in programming, web design, database development, and network configuration.</p>
            </div>
            <div class="bg-white rounded-3xl p-7 shadow-md border border-gray-100 hover-lift text-center">
                <div class="w-16 h-16 bg-ushg-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-ushg-green text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Industrial Training</h3>
                <p class="text-gray-600 text-sm">Mandatory 6-week industrial training to practice in real-world business environments.</p>
            </div>
            <div class="bg-white rounded-3xl p-7 shadow-md border border-gray-100 hover-lift text-center">
                <div class="w-16 h-16 bg-ushg-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chalkboard-user text-ushg-green text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Flexible Learning</h3>
                <p class="text-gray-600 text-sm">Weekend and Online modes available to accommodate working professionals.</p>
            </div>
        </div>

        <!-- Program Uniqueness Section -->
        <div class="bg-gradient-to-r from-ushg-green to-ushg-light-green rounded-3xl p-8 md:p-10 text-white shadow-xl mb-16">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-2 mb-3"><i class="fas fa-star-of-life text-ushg-gold text-xl"></i><span class="text-ushg-gold font-semibold">Program Uniqueness</span></div>
                    <h3 class="text-3xl font-bold mb-4">What Makes BAIT Special at USHG</h3>
                    <p class="text-gray-200 mb-5">The BAIT program is uniquely designed to address local constraints like the "digital divide" in rural communities and the lack of IT skills in Uganda. It integrates ICT training with holistic development and social healing, preparing graduates who are not just technically proficient but also socially conscious.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-ushg-gold text-ushg-green px-4 py-1.5 rounded-full font-medium flex items-center gap-1"><i class="fas fa-microchip"></i> Embedded Systems</span>
                        <span class="bg-white/10 border border-white/20 px-4 py-1.5 rounded-full flex items-center gap-1"><i class="fas fa-mobile-alt"></i> Mobile Technologies</span>
                        <span class="bg-white/10 border border-white/20 px-4 py-1.5 rounded-full flex items-center gap-1"><i class="fas fa-chart-line"></i> Business Intelligence</span>
                        <span class="bg-white/10 border border-white/20 px-4 py-1.5 rounded-full flex items-center gap-1"><i class="fas fa-project-diagram"></i> IT Project Management</span>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="flex items-center gap-2 mb-3"><i class="fas fa-microscope"></i><span class="font-medium">Research Focus Areas</span></div>
                    <hr class="my-3 border-white/20">
                    <div class="grid grid-cols-2 gap-2 text-sm">
                        <div class="flex items-center gap-1"><i class="fas fa-check-circle text-ushg-gold text-xs"></i> ICT for Socio-Economic Development</div>
                        <div class="flex items-center gap-1"><i class="fas fa-check-circle text-ushg-gold text-xs"></i> Information Management</div>
                        <div class="flex items-center gap-1"><i class="fas fa-check-circle text-ushg-gold text-xs"></i> Embedded Systems</div>
                        <div class="flex items-center gap-1"><i class="fas fa-check-circle text-ushg-gold text-xs"></i> Business Intelligence</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enquiry Form -->
        <div id="apply" class="scroll-mt-24 bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden mb-16">
            <div class="grid md:grid-cols-2">
                <div class="bg-gradient-to-br from-ushg-green to-ushg-light-green p-8 md:p-10 text-white">
                    <i class="fas fa-paper-plane text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Ready to Apply?</h3>
                    <p class="text-gray-100 mb-6">Fill out the form and our admissions team will get back to you with more information about the Bachelor of Applied Information Technology program.</p>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center gap-2"><i class="fas fa-phone-alt text-ushg-gold"></i> +256 393 194887</div>
                        <div class="flex items-center gap-2"><i class="fas fa-envelope text-ushg-gold"></i> tlamaro@ush.ac.ug</div>
                        <div class="flex items-center gap-2"><i class="fas fa-map-marker-alt text-ushg-gold"></i> Gulu City, Uganda</div>
                    </div>
                </div>
                <div class="p-8 md:p-10">
                    <form id="enquiryForm" action="https://formsubmit.co/tlamaro@ush.ac.ug" method="POST">
                        <input type="hidden" name="_subject" value="New Enquiry - Bachelor of Applied Information Technology (BAIT)">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_template" value="table">
                        <input type="hidden" name="_next" value="https://ush.ac.ug/thank-you.html">
                        <div class="grid gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                                <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ushg-green focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                                <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ushg-green focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                                <input type="tel" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ushg-green focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Current Organization / Institution</label>
                                <input type="text" name="organization" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ushg-green focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Highest Qualification *</label>
                                <select name="qualification" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ushg-green focus:border-transparent">
                                    <option value="">Select your qualification</option>
                                    <option>UACE (A-Level)</option>
                                    <option>Diploma</option>
                                    <option>Bachelor's Degree</option>
                                    <option>Master's Degree</option>
                                    <option>Professional Qualification</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Your Message / Question *</label>
                                <textarea name="message" rows="3" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ushg-green focus:border-transparent" placeholder="Tell us about your interest in the BAIT program..."></textarea>
                            </div>
                            <button type="submit" class="bg-ushg-green hover:bg-ushg-light-green text-white font-semibold py-3 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-paper-plane"></i>
                                Send Enquiry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-ushg-green text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 mb-12">
                <div class="space-y-4">
                    <h3 class="text-xl font-bold relative inline-block pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-0.5 after:bg-ushg-gold">About Us</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">The University of the Sacred Heart – Gulu is a university established to underscore, highlight, and provide for a continuous and ongoing investigation, critical academic and social reflection into personal and societal need for healing.</p>
                    <div class="flex gap-3 pt-2">
                        <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-ushg-gold hover:text-ushg-green transition"><i class="fab fa-facebook-f text-sm"></i></a>
                        <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-ushg-gold hover:text-ushg-green transition"><i class="fab fa-twitter text-sm"></i></a>
                        <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-ushg-gold hover:text-ushg-green transition"><i class="fab fa-instagram text-sm"></i></a>
                        <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-ushg-gold hover:text-ushg-green transition"><i class="fab fa-linkedin-in text-sm"></i></a>
                        <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-ushg-gold hover:text-ushg-green transition"><i class="fab fa-youtube text-sm"></i></a>
                    </div>
                </div>
                <div class="space-y-4">
                    <h3 class="text-xl font-bold relative inline-block pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-0.5 after:bg-ushg-gold">Quick Links</h3>
                    <ul class="space-y-2 text-gray-300 text-sm">
                        <li><a href="#" class="hover:text-ushg-gold transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-ushg-gold"></i> Home</a></li>
                        <li><a href="https://ush.ac.ug/about-us" class="hover:text-ushg-gold transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-ushg-gold"></i> About Us</a></li>
                        <li><a href="programs" class="hover:text-ushg-gold transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-ushg-gold"></i> Programs</a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSezQRYX65WOzC56NelVfn7JmT3_TLMD6_I19XCjPILtT-W5Ng/viewform?vc=0&c=0&w=1&flr=0&pli=1" target="_blank" class="hover:text-ushg-gold transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-ushg-gold"></i> Admissions</a></li>
                        <li><a href="https://ush.ac.ug/USHG-campus-life" class="hover:text-ushg-gold transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-ushg-gold"></i> Campus Life</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h3 class="text-xl font-bold relative inline-block pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-0.5 after:bg-ushg-gold">Contact Info</h3>
                    <ul class="space-y-3 text-gray-300 text-sm">
                        <li class="flex gap-3"><i class="fas fa-map-marker-alt text-ushg-gold mt-1 flex-shrink-0"></i> <span class="leading-relaxed">University of the Sacred Heart Gulu<br>P.O BOX 374, Next to St. Joseph's Cathedral<br>Gulu West Division, Gulu City, Uganda</span></li>
                        <li class="flex gap-3"><i class="fas fa-phone text-ushg-gold mt-1 flex-shrink-0"></i> <span class="leading-relaxed">+256 393 194887, +256 393 194886<br>+256 393 194928, +256 788 121609</span></li>
                        <li class="flex gap-3"><i class="fas fa-envelope text-ushg-gold mt-1 flex-shrink-0"></i> <span class="leading-relaxed break-all">office@ush.ac.ug<br>registrar@ush.ac.ug</span></li>
                        <li class="flex gap-3"><i class="fas fa-clock text-ushg-gold mt-1 flex-shrink-0"></i> <span>Mon-Fri: 8:00 AM - 5:00 PM</span></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h3 class="text-xl font-bold relative inline-block pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-0.5 after:bg-ushg-gold">Newsletter</h3>
                    <p class="text-gray-300 text-sm">Subscribe to our newsletter to get the latest news and updates.</p>
                    <div class="flex flex-col sm:flex-row gap-2 w-full">
                        <input type="email" placeholder="Your Email Address" class="flex-1 min-w-0 px-4 py-2.5 rounded-lg bg-white/10 border border-white/20 text-white placeholder:text-gray-400 focus:outline-none focus:border-ushg-gold focus:ring-1 focus:ring-ushg-gold text-sm">
                        <button class="bg-ushg-gold hover:bg-yellow-500 text-ushg-green font-semibold px-5 py-2.5 rounded-lg transition whitespace-nowrap text-sm">Subscribe</button>
                    </div>
                    <p class="text-gray-400 text-xs">We respect your privacy. Unsubscribe at any time.</p>
                </div>
            </div>
            <div class="border-t border-white/20 pt-6 text-center text-gray-400 text-sm">
                <p>&copy; 2026 University of the Sacred Heart Gulu. All Rights Reserved. | Health of Mind, Heart and Body for Integral Development</p>
            </div>
        </div>
    </footer>

    <script>
        // Accordion functionality
        const programItem = document.querySelector('.program-item');
        const programHeader = document.querySelector('.program-header');
        const programDetails = document.querySelector('.program-details');
        const expandIcon = document.querySelector('.expand-icon');
        
        if (programHeader && programDetails) {
            programHeader.addEventListener('click', () => {
                const isActive = programItem.classList.contains('active');
                
                if (!isActive) {
                    programItem.classList.add('active');
                    programDetails.style.maxHeight = programDetails.scrollHeight + 'px';
                    expandIcon.style.transform = 'rotate(180deg)';
                } else {
                    programItem.classList.remove('active');
                    programDetails.style.maxHeight = '0';
                    expandIcon.style.transform = 'rotate(0deg)';
                }
            });
        }
        
        // Mobile menu toggle
        const mobileToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileToggle && mobileMenu) {
            mobileToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Mobile dropdown toggles
        document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const content = btn.nextElementSibling;
                const icon = btn.querySelector('i');
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    content.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });

        // Search functionality
        document.querySelectorAll('.search-icon').forEach(icon => {
            icon.addEventListener('click', () => alert('Search functionality coming soon!'));
        });
        
        // Close mobile menu on resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024 && mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#' || targetId === '#program' || targetId === '#details' || targetId === '#career' || targetId === '#apply') {
                    e.preventDefault();
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    </script>
</body>
</html>