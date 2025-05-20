<div class="mx-auto max-w-2xl px-6 py-12">
    <section class="mb-20">
        <div class="gradient-bg rounded-2xl p-8 mb-10 relative overflow-hidden border border-gray-800">
            <div class="flex sm:flex-row flex-col sm:items-center gap-6 mb-8">
                <div
                    class="w-24 h-24 rounded-full bg-gradient-to-br from-gray-700 to-gray-900 shadow-lg flex items-center justify-center text-4xl font-bold text-white">
                    TG
                </div>
                <div>
                    <h1 class="text-3xl font-bold">{{ $personalInfo->name }}</h1>
                    <p class="text-gray-400 mb-1">{{ $personalInfo->job_title }}</p>
                    <p class="text-gray-500 text-sm">
                        <i class="fas fa-map-marker-alt mr-2"></i> {{ $personalInfo->address }}
                    </p>
                </div>
            </div>

            <p class="mb-8 text-gray-300 leading-relaxed">
                {{ $personalInfo->job_description }}
            </p>

            <div class="flex items-center gap-4 mb-8">
                <a href="#"
                    class="px-6 py-2 bg-gray-800 border-2 border-gray-800 rounded-full text-white font-medium transition-all hover:bg-gray-700 hover:shadow-lg">
                    Download CV
                </a>
                <a href="#contact"
                    class="px-6 py-2 border-2 border-gray-700 text-gray-300 rounded-full font-medium transition-all hover:border-gray-600 hover:text-gray-200 hover:shadow-lg">
                    Contact Me
                </a>
            </div>

            <div class="flex space-x-6 text-xl">
                <a href="{{ $personalInfo->github }}" target="_blank"
                    class="text-gray-500 hover:text-gray-300 transition-colors"><i class="fab fa-github"></i></a>
                <a href="{{ $personalInfo->linkedin }}" target="_blank"
                    class="text-gray-500 hover:text-gray-300 transition-colors"><i class="fab fa-linkedin"></i></a>
                <a href="{{ $personalInfo->twitter }}" target="_blank"
                    class="text-gray-500 hover:text-gray-300 transition-colors"><i
                        class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>
    </section>

    <section class="mb-20">
        <h2 class="text-2xl font-bold mb-8">Skills & Technologies</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/javascript/fff" />
                <span class="text-gray-300">JavaScript</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/python/fff" />
                <span class="text-gray-300">Python</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/mysql/fff" />
                <span class="text-gray-300">MySQL</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/laravel/fff" />
                <span class="text-gray-300">Laravel</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/nodedotjs/fff" />
                <span class="text-gray-300">Node.js</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/wordpress/fff" />
                <span class="text-gray-300">WordPress</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/amazonwebservices/fff" />
                <span class="text-gray-300">AWS</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/git/fff" />
                <span class="text-gray-300">Git</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/github/fff" />
                <span class="text-gray-300">Github</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/html5/fff" />
                <span class="text-gray-300">HTML5</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/css3/fff" />
                <span class="text-gray-300">CSS3</span>
            </div>

            <div class="badge bg-gray-800 p-3 rounded-lg flex items-center space-x-2">
                <img height="18" width="18" src="https://cdn.simpleicons.org/autodeskmaya/fff" />
                <span class="text-gray-300">Maya</span>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <section x-data="{ activeTab: 'experience' }" class="mb-20">
        <h2 class="text-2xl font-bold mb-8">About Me</h2>

        <div class="flex space-x-4 mb-6 border-b border-gray-800">
            <button @click="activeTab = 'experience'" :class="activeTab === 'experience' ? 'active' : ''"
                class="tab-button px-4 py-2 font-medium">
                Experience
            </button>
            <button @click="activeTab = 'education'" :class="activeTab === 'education' ? 'active' : ''"
                class="tab-button px-4 py-2 font-medium">
                Education
            </button>
        </div>

        <div id="experience" :class="activeTab === 'experience' ? 'active' : ''" class="tab-content">
            <div class="space-y-6">
                <div class="border-l-2 border-gray-600 pl-4 py-2">
                    <h3 class="text-xl font-medium">
                        Freelance Laravel Developer
                    </h3>
                    <p class="text-gray-400 text-sm">
                        Freelancer • 2024 - Present
                    </p>
                    <p class="text-gray-300 mt-2 leading-relaxed">
                        Worked on 5+ Laravel projects for various
                        clients, including blogs. Developed APIs,
                        optimized database performance. Built websites
                        for business blogs and other purposes.
                    </p>
                </div>

                <div class="border-l-2 border-gray-600 pl-4 py-2">
                    <h3 class="text-xl font-medium">
                        Wordpress Developer
                    </h3>
                    <p class="text-gray-400 text-sm">
                        Digipal Solutions • 2023 - 2025
                    </p>
                    <p class="text-gray-300 mt-2 leading-relaxed">
                        Managed multiple WordPress websites for business
                        clients, including domain and hosting setup.
                        Implemented custom themes, plugins, and SEO
                        optimization. Configured email services and
                        ensured reliable site performance.
                    </p>
                </div>
            </div>
        </div>

        <div id="education" :class="activeTab === 'education' ? 'active' : ''" class="tab-content">
            <div class="space-y-6">
                <div class="border-l-2 border-gray-600 pl-4 py-2">
                    <h3 class="text-xl font-medium">
                        BSc(Hons) in Multimedia Technologies
                    </h3>
                    <p class="text-gray-400 text-sm">
                        Islington College, Nepal • 2018 - Present
                    </p>
                    <p class="text-gray-300 mt-2 leading-relaxed">
                        Currently pursuing my undergraduate degree in
                        Multimedia Technologies, focusing on web
                        development and digital media. Coursework
                        includes web programming, multimedia design, and
                        human computer interaction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <section class="mb-20">
        <h2 class="text-2xl font-bold mb-8">Featured Projects</h2>

        <div class="grid gap-6">
            <div class="project-card bg-gray-900 rounded-xl p-6 border border-gray-800">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-xl font-bold">
                            Digipal Solutions
                        </h3>
                    </div>
                    <div class="flex space-x-3">
                        <a href="https://github.com/Tsrgtm/Digipal-Solutions" target="_blank"
                            class="text-gray-500 hover:text-gray-300"><i class="fab fa-github"></i></a>
                        <a href="https://digipalsolutions.com.np" target="_blank"
                            class="text-gray-500 hover:text-gray-300"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <p class="text-gray-300 mb-4">
                    Business website for DigiPal Solutions, a digital
                    marketing company based in Nepal. Made with Laravel
                    and Livewire.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-xs text-gray-300">Laravel</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-xs text-gray-300">Livewire</span>
                </div>
            </div>

            <div class="project-card bg-gray-900 rounded-xl p-6 border border-gray-800">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-xl font-bold">
                            Naesthetic Skin Care
                        </h3>
                    </div>
                    <div class="flex space-x-3">
                        <a href="https://naestheticskincare.com" target="_blank"
                            class="text-gray-500 hover:text-gray-300"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <p class="text-gray-300 mb-4">
                    A product showcase website for Naesthetic Skin Care,
                    built with WordPress and Elementor. Features a
                    custom theme, product catalog, and contact form.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-xs text-gray-300">WordPress</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-xs text-gray-300">Elementor</span>
                </div>
            </div>

            <div class="project-card bg-gray-900 rounded-xl p-6 border border-gray-800">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-xl font-bold">MoMo Durbar</h3>
                    </div>
                    <div class="flex space-x-3">
                        <a href="https://momodurbar.com" target="_blank" class="text-gray-500 hover:text-gray-300"><i
                                class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <p class="text-gray-300 mb-4">
                    A simple one-page website for MoMo Durbar, featuring
                    a dashboard to add menu items and read contact form
                    messages.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-xs text-gray-300">Laravel</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-xs text-gray-300">Filament</span>
                </div>
            </div>
        </div>

        <!-- <div class="mt-8 text-center">
            <a
                href="#"
                class="px-6 py-2 border-2 border-gray-800 text-gray-300 rounded-full font-medium transition-all hover:border-gray-700 hover:text-gray-200 hover:shadow-lg"
            >
                View All Projects
            </a>
        </div> -->
    </section>

    <div class="section-divider"></div>

    <section id="contact" class="mb-20">
        <h2 class="text-2xl font-bold mb-8">Get In Touch</h2>

        <div class="contact-card rounded-2xl p-8 border border-gray-800">
            <div class="grid md:grid-cols-2 gap-8">

                @livewire('contact-form')

                <div>
                    <h3 class="text-xl font-medium mb-6">
                        Contact Information
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="contact-icon">
                                <i class="fas fa-envelope text-gray-300 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">
                                    Email
                                </p>
                                <p class="text-gray-200">
                                    {{ $personalInfo->email }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt text-gray-300 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">
                                    Phone
                                </p>
                                <p class="text-gray-200">
                                    {{ $personalInfo->phone }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt text-gray-300 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">
                                    Location
                                </p>
                                <p class="text-gray-200">
                                    {{ $personalInfo->address }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-800">
                        <h4 class="text-gray-300 mb-4">
                            Connect with me
                        </h4>
                        <div class="flex space-x-4">
                            <a href="{{ $personalInfo->github }}" target="_blank"
                                class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-gray-700 transition-colors">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="{{ $personalInfo->linkedin }}" target="_blank"
                                class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-gray-700 transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="{{ $personalInfo->twitter }}" target="_blank"
                                class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-gray-700 transition-colors">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>




    <footer class="text-center text-gray-500 text-sm">
        <p>
            &copy; {{ date('Y') }} Tusar Gautam. All
            rights reserved.
        </p>
    </footer>
</div>
