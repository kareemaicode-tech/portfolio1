<!DOCTYPE html>
    <html lang="ar" dir="rtl" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>أحمد المنصوري | مهندس ومطور برمجيات الويب المتكاملة</title>
        
        <!-- Google Fonts: Cairo -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            cairo: ['Cairo', 'sans-serif'],
                        },
                        colors: {
                            brand: {
                                50: '#f0fdfa',
                                100: '#ccfbf1',
                                500: '#14b8a6',
                                600: '#0d9488',
                                700: '#0f766e',
                            },
                            accent: {
                                500: '#6366f1',
                                600: '#4f46e5',
                            }
                        }
                    }
                }
            }
        </script>
        
        <style>
            body {
                font-family: 'Cairo', sans-serif;
            }
            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }
            ::-webkit-scrollbar-track {
                background: #0f172a;
            }
            ::-webkit-scrollbar-thumb {
                background: #0d9488;
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #14b8a6;
            }
        </style>
    </head>
    <body class="bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-100 transition-colors duration-300 antialiased selection:bg-teal-500 selection:text-white">

        <!-- Navigation Bar -->
        <header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-white/80 dark:bg-slate-900/80 border-b border-slate-200/80 dark:border-slate-800 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <!-- Logo -->
                    <a href="#hero" class="flex items-center gap-2 group">
                        <span class="w-10 h-10 rounded-xl bg-gradient-to-tr from-teal-600 to-indigo-600 flex items-center justify-center text-white font-black text-xl shadow-lg shadow-teal-500/20 group-hover:scale-105 transition-transform duration-300">
                            A
                        </span>
                        <span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">
                            أحمد<span class="text-teal-600 dark:text-teal-400">.المنصوري</span>
                        </span>
                    </a>

                    <!-- Desktop Nav Links -->
                    <nav class="hidden md:flex items-center gap-8">
                        <a href="#hero" class="font-medium text-slate-600 dark:text-slate-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors">الرئيسية</a>
                        <a href="#about" class="font-medium text-slate-600 dark:text-slate-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors">عني</a>
                        <a href="#skills" class="font-medium text-slate-600 dark:text-slate-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors">المهارات</a>
                        <a href="#projects" class="font-medium text-slate-600 dark:text-slate-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors">المشاريع</a>
                        <a href="#contact" class="font-medium text-slate-600 dark:text-slate-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors">تواصل معي</a>
                    </nav>

                    <!-- Actions: Dark Mode Toggle & Mobile Menu Button -->
                    <div class="flex items-center gap-3">
                        <button id="theme-toggle" aria-label="تبديل الوضع" class="p-2.5 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors focus:outline-none">
                            <i id="theme-icon" class="fa-solid fa-moon text-lg"></i>
                        </button>
                        <a href="#contact" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-teal-600 hover:bg-teal-700 text-white font-medium shadow-md shadow-teal-600/20 transition-all hover:-translate-y-0.5">
                            <span>ابدأ مشروعك</span>
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                        </a>
                        <!-- Mobile Hamburger -->
                        <button id="mobile-toggle" aria-label="القائمة" class="md:hidden p-2.5 rounded-xl border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300">
                            <i class="fa-solid fa-bars text-lg"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 dark:border-slate-800 bg-white/95 dark:bg-slate-900/95 px-6 py-4 space-y-3">
                <a href="#hero" class="block text-slate-700 dark:text-slate-200 py-2 hover:text-teal-600 dark:hover:text-teal-400 font-medium">الرئيسية</a>
                <a href="#about" class="block text-slate-700 dark:text-slate-200 py-2 hover:text-teal-600 dark:hover:text-teal-400 font-medium">عني</a>
                <a href="#skills" class="block text-slate-700 dark:text-slate-200 py-2 hover:text-teal-600 dark:hover:text-teal-400 font-medium">المهارات</a>
                <a href="#projects" class="block text-slate-700 dark:text-slate-200 py-2 hover:text-teal-600 dark:hover:text-teal-400 font-medium">المشاريع</a>
                <a href="#contact" class="block text-slate-700 dark:text-slate-200 py-2 hover:text-teal-600 dark:hover:text-teal-400 font-medium">تواصل معي</a>
            </div>
        </header>

        <!-- Hero Section -->
        <section id="hero" class="relative pt-36 pb-20 md:pt-44 md:pb-32 overflow-hidden">
            <!-- Background Glowing Blurs -->
            <div class="absolute -top-32 right-1/4 w-96 h-96 bg-teal-500/10 dark:bg-teal-500/15 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute top-1/2 -left-20 w-80 h-80 bg-indigo-500/10 dark:bg-indigo-500/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Text Details -->
                    <div class="lg:col-span-7 text-center lg:text-right space-y-6">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-teal-50 dark:bg-teal-950/60 border border-teal-200 dark:border-teal-800 text-teal-700 dark:text-teal-300 text-sm font-semibold">
                            <span class="w-2.5 h-2.5 rounded-full bg-teal-500 animate-pulse"></span>
                            متاح حالياً للعمل الحر والمشاريع النوعية
                        </div>

                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 dark:text-white leading-tight">
                            مرحباً، أنا <span class="bg-gradient-to-r from-teal-600 via-teal-500 to-indigo-600 bg-clip-text text-transparent">أحمد المنصوري</span>
                        </h1>

                        <p class="text-xl sm:text-2xl font-bold text-slate-700 dark:text-slate-300">
                            مطور برمجيات ويب متكامل (Full Stack Web Developer)
                        </p>

                        <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                            أبني تطبيقات ويب تفاعلية وسريعة بالاعتماد على بيئة <strong class="text-teal-600 dark:text-teal-400">Laravel, PHP, Livewire</strong> مع واجهات مستخدم حديثة بـ <strong class="text-teal-600 dark:text-teal-400">Tailwind CSS</strong>، مع التركيز على الأداء العالي وتجربة المستخدم السلسة.
                        </p>

                        <!-- CTAs -->
                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                            <a href="#projects" class="px-8 py-3.5 rounded-xl bg-teal-600 hover:bg-teal-700 text-white font-bold shadow-lg shadow-teal-600/30 transition-all hover:scale-105 flex items-center gap-2">
                                <span>استكشف المشاريع</span>
                                <i class="fa-solid fa-arrow-left"></i>
                            </a>
                            <a href="#contact" class="px-8 py-3.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 font-bold hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">
                                تواصل معي
                            </a>
                        </div>

                        <!-- Social Icons -->
                        <div class="pt-4 flex items-center justify-center lg:justify-start gap-4 text-slate-600 dark:text-slate-400">
                            <span class="text-sm font-semibold text-slate-500 dark:text-slate-400">تابعني:</span>
                            <a href="https://github.com" target="_blank" rel="noreferrer" class="w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-teal-500 hover:text-white dark:hover:bg-teal-500 transition-all">
                                <i class="fa-brands fa-github text-lg"></i>
                            </a>
                            <a href="https://linkedin.com" target="_blank" rel="noreferrer" class="w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-teal-500 hover:text-white dark:hover:bg-teal-500 transition-all">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                            </a>
                            <a href="https://x.com" target="_blank" rel="noreferrer" class="w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-teal-500 hover:text-white dark:hover:bg-teal-500 transition-all">
                                <i class="fa-brands fa-x-twitter text-lg"></i>
                            </a>
                            <a href="mailto:developer@example.com" class="w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-teal-500 hover:text-white dark:hover:bg-teal-500 transition-all">
                                <i class="fa-solid fa-envelope text-lg"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Avatar and Visual Card -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-72 sm:w-84 md:w-96 aspect-square">
                            <!-- Decorative Frame -->
                            <div class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-teal-500 to-indigo-600 rotate-6 opacity-30 blur-lg"></div>
                            <div class="absolute inset-0 rounded-3xl border-2 border-teal-500/30 -rotate-3"></div>
                            <div class="relative w-full h-full rounded-3xl overflow-hidden border-2 border-white dark:border-slate-800 shadow-2xl bg-slate-900">
                                <!-- High quality developer illustration/mockup -->
                                <img src="https://images.unsplash.com/photo-1534972195531-a756b1126f24?auto=format&fit=crop&w=800&q=80" 
                                    alt="Ahmed Al-Mansouri" 
                                    class="w-full h-full object-cover grayscale-[20%] hover:grayscale-0 hover:scale-105 transition-all duration-500"
                                    onerror="this.src='https://placehold.co/600x600/0f172a/14b8a6?text=Ahmed+Developer'">
                                
                                <!-- Floating Badge 1 -->
                                <div class="absolute bottom-4 left-4 bg-slate-900/90 backdrop-blur-md border border-slate-700 text-white px-4 py-2 rounded-2xl flex items-center gap-3 shadow-lg">
                                    <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                                    <div class="text-right">
                                        <p class="text-[11px] text-slate-400">الخبرة العملية</p>
                                        <p class="text-sm font-bold">+5 سنوات احتراف</p>
                                    </div>
                                </div>

                                <!-- Floating Badge 2 -->
                                <div class="absolute top-4 right-4 bg-teal-600/90 backdrop-blur-md text-white px-3 py-1.5 rounded-xl text-xs font-bold flex items-center gap-1.5 shadow">
                                    <i class="fa-solid fa-code"></i>
                                    <span>Laravel & Livewire</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="about" class="py-24 bg-white dark:bg-slate-900/50 border-y border-slate-200/60 dark:border-slate-800/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-teal-600 dark:text-teal-400 font-bold text-sm tracking-wider uppercase">نبذة مهنية</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white mt-2">من أنا وماذا أقدم؟</h2>
                    <div class="w-16 h-1 bg-teal-500 mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Bio Description -->
                    <div class="lg:col-span-7 space-y-6 text-slate-600 dark:text-slate-300 leading-relaxed text-lg">
                        <p>
                            أنا مهندس برمجيات متخصص في بناء حلول الويب الحديثة، أمتلك شغفاً عميقاً بتحويل المتطلبات المعقدة إلى أنظمة بسيطة وفعالة وقابلة للتوسع. 
                        </p>
                        <p>
                            خلال مسيرتي، قمت ببرمجة وتطوير العديد من المنصات من أنظمة إدارة المحتوى وحجوزات الفنادق إلى منصات البرمجيات كخدمة (SaaS). أركز دائماً على المعايير الصارمة لجودة الكود، الأمان وحماية البيانات، وأفضل ممارسات قواعد البيانات مع بنية معمارية نظيفة (Clean Architecture).
                        </p>

                        <!-- Stats Row -->
                        <div class="grid grid-cols-3 gap-4 pt-4">
                            <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700/60 text-center">
                                <span class="block text-3xl font-black text-teal-600 dark:text-teal-400">+5</span>
                                <span class="text-xs sm:text-sm font-medium text-slate-500 dark:text-slate-400">سنوات خبرة</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700/60 text-center">
                                <span class="block text-3xl font-black text-teal-600 dark:text-teal-400">+45</span>
                                <span class="text-xs sm:text-sm font-medium text-slate-500 dark:text-slate-400">مشروع منجز</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700/60 text-center">
                                <span class="block text-3xl font-black text-teal-600 dark:text-teal-400">100%</span>
                                <span class="text-xs sm:text-sm font-medium text-slate-500 dark:text-slate-400">رضا العملاء</span>
                            </div>
                        </div>

                        <!-- CV Download Button -->
                        <div class="pt-4">
                            <button onclick="downloadCvFeedback()" class="inline-flex items-center gap-3 px-6 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white dark:bg-slate-800 dark:hover:bg-slate-700 border border-slate-700 font-semibold transition-all">
                                <i class="fa-solid fa-file-arrow-down text-teal-400"></i>
                                <span>تحميل السيرة الذاتية (CV)</span>
                            </button>
                        </div>
                    </div>

                    <!-- Features Highlights -->
                    <div class="lg:col-span-5 space-y-4">
                        <div class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/80 border border-slate-200/80 dark:border-slate-700 flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-teal-500/10 text-teal-600 dark:text-teal-400 flex items-center justify-center shrink-0 text-xl">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white text-base">أداء فائق واستجابة سريعة</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">تحسين أداء الاستعلامات وسرعة تحميل الصفحات باستخدام أحدث ممارسات التخزين المؤقت والتهيئة.</p>
                            </div>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/80 border border-slate-200/80 dark:border-slate-700 flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center shrink-0 text-xl">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white text-base">كود آمن ومحمي</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">تطبيق معايير أمان OWASP وحماية التطبيقات ضد هجمات الويب وثغرات الحقن المختلفة.</p>
                            </div>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/80 border border-slate-200/80 dark:border-slate-700 flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center shrink-0 text-xl">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white text-base">تصميم متجاوب بالكامل</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">واجهات تبدو مثالية وتعمل بسلاسة على الهواتف والأجهزة اللوحية والشاشات الكبيرة.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Skills & Technologies Section -->
        <section id="skills" class="py-24 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-teal-600 dark:text-teal-400 font-bold text-sm tracking-wider uppercase">الخبرات التقنية</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white mt-2">الأدوات وحزم العمل التي أتقنها</h2>
                    <div class="w-16 h-1 bg-teal-500 mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Category 1: Backend Development -->
                    <div class="group p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-teal-500/50 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-teal-50 dark:bg-teal-950/70 text-teal-600 dark:text-teal-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">تطوير الباك إند (Backend)</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6">بناء المنطق البرمجي، واجهات RESTful APIs، وبوابات الدفع الإلكتروني.</p>
                        
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>Laravel (10 & 11)</span>
                                    <span class="text-teal-600">95%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-teal-500 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>PHP 8.x (OOP & Design Patterns)</span>
                                    <span class="text-teal-600">92%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-teal-500 rounded-full" style="width: 92%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>RESTful APIs & Microservices</span>
                                    <span class="text-teal-600">90%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-teal-500 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 2: Frontend Development -->
                    <div class="group p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-teal-500/50 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50 dark:bg-indigo-950/70 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">تطوير الفرونت إند (Frontend)</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6">واجهات متفاعلة لحظية وسريعة بأحدث تقنيات الـ CSS والـ JS.</p>
                        
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>Tailwind CSS</span>
                                    <span class="text-indigo-600">96%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-indigo-500 rounded-full" style="width: 96%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>Laravel Livewire (v3) & Alpine.js</span>
                                    <span class="text-indigo-600">90%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-indigo-500 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>JavaScript (ES6+)</span>
                                    <span class="text-indigo-600">85%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-indigo-500 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 3: Databases & Tools -->
                    <div class="group p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-teal-500/50 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 dark:bg-amber-950/70 text-amber-600 dark:text-amber-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">قواعد البيانات والأدوات</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6">إدارة البيانات، التحكم بالإصدارات، وبيئات النشر والتشغيل.</p>
                        
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>MySQL / PostgreSQL</span>
                                    <span class="text-amber-600">92%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-amber-500 rounded-full" style="width: 92%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>Git & GitHub Workflows</span>
                                    <span class="text-amber-600">88%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-amber-500 rounded-full" style="width: 88%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1">
                                    <span>Docker & Linux Hosting</span>
                                    <span class="text-amber-600">80%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-amber-500 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-24 bg-white dark:bg-slate-900/50 border-t border-slate-200/60 dark:border-slate-800/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-teal-600 dark:text-teal-400 font-bold text-sm tracking-wider uppercase">معرض الأعمال</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white mt-2">نماذج مختارة من أعمالي</h2>
                    <div class="w-16 h-1 bg-teal-500 mx-auto mt-4 rounded-full"></div>
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap justify-center items-center gap-3 mb-12">
                    <button onclick="filterProjects('all')" class="filter-btn active-filter px-5 py-2 rounded-xl text-sm font-bold bg-teal-600 text-white transition-all shadow-sm">
                        الكل
                    </button>
                    <button onclick="filterProjects('saas')" class="filter-btn px-5 py-2 rounded-xl text-sm font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">
                        منصات SaaS
                    </button>
                    <button onclick="filterProjects('ecommerce')" class="filter-btn px-5 py-2 rounded-xl text-sm font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">
                        متاجر وحجوزات
                    </button>
                    <button onclick="filterProjects('dashboards')" class="filter-btn px-5 py-2 rounded-xl text-sm font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">
                        لوحات تحكم
                    </button>
                </div>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
                    
                    <!-- Project 1 -->
                    <div class="project-item group rounded-3xl overflow-hidden bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:shadow-2xl transition-all duration-300 flex flex-col" data-category="ecommerce">
                        <div class="relative overflow-hidden aspect-video bg-slate-800">
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=700&q=80" 
                                alt="نظام إدارة وحجوزات الفنادق" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                onerror="this.src='https://placehold.co/700x400/0f172a/14b8a6?text=Hotel+System'">
                            <span class="absolute top-4 right-4 bg-slate-900/80 backdrop-blur-md text-white text-xs px-3 py-1 rounded-full font-semibold">حجوزات</span>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">منظومة حجز وإدارة الفنادق الذكية</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">
                                    منصة حجز فندقية متكاملة تتضمن جدول مواعيد متزامن، بوابات دفع، وتقارير إشغال الغرف التلقائية.
                                </p>
                                <!-- Tags -->
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">Laravel 11</span>
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">Livewire</span>
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">MySQL</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-4 border-t border-slate-200 dark:border-slate-800">
                                <a href="#contact" class="text-teal-600 dark:text-teal-400 font-bold text-sm inline-flex items-center gap-1.5 hover:underline">
                                    <span>معاينة تفصيلية</span>
                                    <i class="fa-solid fa-arrow-left text-xs"></i>
                                </a>
                                <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-slate-800 dark:hover:text-white text-lg">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-item group rounded-3xl overflow-hidden bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:shadow-2xl transition-all duration-300 flex flex-col" data-category="saas">
                        <div class="relative overflow-hidden aspect-video bg-slate-800">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=700&q=80" 
                                alt="منصة فواتير SaaS" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                onerror="this.src='https://placehold.co/700x400/0f172a/14b8a6?text=SaaS+Invoicing'">
                            <span class="absolute top-4 right-4 bg-slate-900/80 backdrop-blur-md text-white text-xs px-3 py-1 rounded-full font-semibold">SaaS</span>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">منصة فوترة سحابية للشركات</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">
                                    منصة برمجية قائمة على الاشتراك الشهري، تقدم فواتير إلكترونية متوافقة مع الأنظمة الضريبية وتنبيهات بريدية.
                                </p>
                                <!-- Tags -->
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">PHP</span>
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">Tailwind CSS</span>
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">Stripe</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-4 border-t border-slate-200 dark:border-slate-800">
                                <a href="#contact" class="text-teal-600 dark:text-teal-400 font-bold text-sm inline-flex items-center gap-1.5 hover:underline">
                                    <span>معاينة تفصيلية</span>
                                    <i class="fa-solid fa-arrow-left text-xs"></i>
                                </a>
                                <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-slate-800 dark:hover:text-white text-lg">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="project-item group rounded-3xl overflow-hidden bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:shadow-2xl transition-all duration-300 flex flex-col" data-category="dashboards">
                        <div class="relative overflow-hidden aspect-video bg-slate-800">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=700&q=80" 
                                alt="لوحة تحكم إحصائية" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                onerror="this.src='https://placehold.co/700x400/0f172a/14b8a6?text=Analytics+Dashboard'">
                            <span class="absolute top-4 right-4 bg-slate-900/80 backdrop-blur-md text-white text-xs px-3 py-1 rounded-full font-semibold">لوحة تحكم</span>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">لوحة قيادة وتحليل بيانات المبيعات</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">
                                    لوحة قيادة احترافية تعرض رسوماً بيانية تفاعلية في الوقت الفعلي مع نظام صلاحيات مستخدمين متعدد المستويات.
                                </p>
                                <!-- Tags -->
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">Laravel Filament</span>
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">Chart.js</span>
                                    <span class="text-xs px-2.5 py-1 rounded-lg bg-teal-50 dark:bg-teal-950/60 text-teal-700 dark:text-teal-300 font-medium">Alpine.js</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-4 border-t border-slate-200 dark:border-slate-800">
                                <a href="#contact" class="text-teal-600 dark:text-teal-400 font-bold text-sm inline-flex items-center gap-1.5 hover:underline">
                                    <span>معاينة تفصيلية</span>
                                    <i class="fa-solid fa-arrow-left text-xs"></i>
                                </a>
                                <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-slate-800 dark:hover:text-white text-lg">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-teal-600 dark:text-teal-400 font-bold text-sm tracking-wider uppercase">تواصل معي</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white mt-2">دعنا نبني شيئاً رائعاً معاً</h2>
                    <div class="w-16 h-1 bg-teal-500 mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <!-- Direct Information -->
                    <div class="lg:col-span-5 space-y-6">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white">هل لديك فكرة مشروع أو استفسار؟</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            أنا دائماً منفتح لمناقشة أفكار المنتجات الجديدة، تقديم الاستشارات التقنية، أو بناء حلول مخصصة لأعمالك. راسلني مباشرة وسأرد عليك خلال 24 ساعة.
                        </p>

                        <div class="space-y-4 pt-2">
                            <div class="flex items-center gap-4 p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                                <div class="w-12 h-12 rounded-xl bg-teal-500/10 text-teal-600 dark:text-teal-400 flex items-center justify-center text-xl">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <span class="text-xs text-slate-500 dark:text-slate-400">البريد الإلكتروني المباشر</span>
                                    <p class="font-bold text-slate-800 dark:text-slate-200">contact@ahmed-dev.com</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                                <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-xl">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="text-xs text-slate-500 dark:text-slate-400">الموقع</span>
                                    <p class="font-bold text-slate-800 dark:text-slate-200">صنعاء، اليمن (متاح للعمل عن بُعد)</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                                <div>
                                    <span class="text-xs text-slate-500 dark:text-slate-400">واتساب للرسائل السريعة</span>
                                    <p class="font-bold text-slate-800 dark:text-slate-200" dir="ltr">+967 770 000 000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="lg:col-span-7">
                        <div class="bg-white dark:bg-slate-900 p-8 sm:p-10 rounded-3xl border border-slate-200 dark:border-slate-800 shadow-xl">
                            <!-- Notification banner -->
                            <div id="form-alert" class="hidden mb-6 p-4 rounded-2xl bg-teal-50 dark:bg-teal-950/80 border border-teal-200 dark:border-teal-800 text-teal-800 dark:text-teal-200 text-sm font-semibold flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-teal-500 text-lg"></i>
                                <span>شكراً لتواصلك! تم استلام رسالتك بنجاح وسأعاود التواصل معك قريباً.</span>
                            </div>

                            <form id="contact-form" onsubmit="handleFormSubmit(event)" class="space-y-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">الاسم الكامل</label>
                                        <input type="text" required placeholder="مثال: محمد علي" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-teal-500 transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">البريد الإلكتروني</label>
                                        <input type="email" required placeholder="name@domain.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-teal-500 transition-all">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">عنوان الرسالة / نوع المشروع</label>
                                    <input type="text" required placeholder="مثال: تطوير نظام متجر إلكتروني متكامل" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-teal-500 transition-all">
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">تفاصيل الرسالة</label>
                                    <textarea rows="4" required placeholder="اكتب تفاصيل فكرتك أو استفسارك هنا..." class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-teal-500 transition-all"></textarea>
                                </div>

                                <button type="submit" class="w-full py-4 rounded-xl bg-teal-600 hover:bg-teal-700 text-white font-bold text-base shadow-lg shadow-teal-600/30 transition-all flex items-center justify-center gap-2">
                                    <span>إرسال الرسالة الآن</span>
                                    <i class="fa-solid fa-paper-plane text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-right">
                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-lg bg-teal-600 flex items-center justify-center text-white font-bold text-base">A</span>
                        <span class="text-white font-bold text-lg">أحمد المنصوري</span>
                        <span class="text-xs bg-slate-800 text-teal-400 px-2 py-0.5 rounded-full mr-2">Full Stack Dev</span>
                    </div>

                    <div class="flex flex-wrap items-center justify-center gap-6 text-sm">
                        <a href="#hero" class="hover:text-white transition-colors">الرئيسية</a>
                        <a href="#about" class="hover:text-white transition-colors">عني</a>
                        <a href="#skills" class="hover:text-white transition-colors">المهارات</a>
                        <a href="#projects" class="hover:text-white transition-colors">المشاريع</a>
                        <a href="#contact" class="hover:text-white transition-colors">التواصل</a>
                    </div>

                    <p class="text-sm text-slate-500">
                        &copy; 2026 جميع الحقوق محفوظة. صُمم وطُوّر بكل شغف.
                    </p>
                </div>
            </div>
        </footer>

        <!-- Custom JavaScript Logic -->
        <script>
            // Dark Mode Logic
            const themeToggleBtn = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const htmlElement = document.documentElement;

            // Check stored theme or default to system preference
            if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                htmlElement.classList.add('dark');
                themeIcon.classList.replace('fa-moon', 'fa-sun');
            } else {
                htmlElement.classList.remove('dark');
                themeIcon.classList.replace('fa-sun', 'fa-moon');
            }

            themeToggleBtn.addEventListener('click', () => {
                if (htmlElement.classList.contains('dark')) {
                    htmlElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                    themeIcon.classList.replace('fa-sun', 'fa-moon');
                } else {
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                    themeIcon.classList.replace('fa-moon', 'fa-sun');
                }
            });

            // Mobile Menu Toggle
            const mobileToggleBtn = document.getElementById('mobile-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileToggleBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu on clicking any link
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });

            // Project Filtering
            function filterProjects(category) {
                const items = document.querySelectorAll('.project-item');
                const buttons = document.querySelectorAll('.filter-btn');

                buttons.forEach(btn => {
                    btn.classList.remove('bg-teal-600', 'text-white');
                    btn.classList.add('bg-slate-100', 'dark:bg-slate-800', 'text-slate-600', 'dark:text-slate-300');
                });

                // Set current active button
                event.target.classList.add('bg-teal-600', 'text-white');
                event.target.classList.remove('bg-slate-100', 'dark:bg-slate-800', 'text-slate-600', 'dark:text-slate-300');

                items.forEach(item => {
                    if (category === 'all' || item.dataset.category === category) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            // Contact Form Submission Handler
            function handleFormSubmit(e) {
                e.preventDefault();
                const alertBox = document.getElementById('form-alert');
                alertBox.classList.remove('hidden');
                e.target.reset();

                setTimeout(() => {
                    alertBox.classList.add('hidden');
                }, 6000);
            }

            // CV Download Notice feedback
            function downloadCvFeedback() {
                const formAlert = document.getElementById('form-alert');
                formAlert.querySelector('span').innerText = 'تم تجهيز ملف السيرة الذاتية للتنزيل!';
                formAlert.classList.remove('hidden');
                window.location.href = "#contact";
                setTimeout(() => {
                    formAlert.classList.add('hidden');
                    formAlert.querySelector('span').innerText = 'شكراً لتواصلك! تم استلام رسالتك بنجاح وسأعاود التواصل معك قريباً.';
                }, 4000);
            }
        </script>
    </body>
    </html>