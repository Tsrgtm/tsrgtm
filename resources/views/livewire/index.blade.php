<div>
    <section class="mb-20">
        <div class="gradient-bg rounded-2xl p-8 mb-10 relative overflow-hidden border border-gray-800">
            <div class="flex sm:flex-row flex-col sm:items-center gap-6 mb-8">
                <div
                    class="w-24 h-24 rounded-full bg-gradient-to-br from-gray-700 to-gray-900 shadow-lg flex items-center justify-center text-4xl font-bold text-white">
                    TG
                </div>
                <div>
                    <h1 class="text-3xl font-bold">{{ $personalInfo->name ?? 'Tusar Gautam' }}</h1>
                    <p class="text-gray-400 mb-1">{{ $personalInfo->job_title ?? 'Web Developer' }}</p>
                    <p class="text-gray-500 text-sm">
                        <i class="fas fa-map-marker-alt mr-2"></i> {{ $personalInfo->address ?? 'Kathmandu, Nepal' }}
                    </p>
                </div>
            </div>

            <p class="mb-8 text-gray-300 leading-relaxed">
                {{ $personalInfo->job_description ?? "Hey there! I'm a self-taught web developer specializing in creating web applications. My primary tools are Laravel (PHP) and WordPress, but I also frequently use Python, Node.js, and Express.js." }}
            </p>

            <div class="flex items-center gap-4 mb-8 text-center">
                <a href="#"
                    class="flex px-6 py-2 w-full sm:w-auto bg-gray-800 border-2 border-gray-800 rounded-full text-white font-medium transition-all hover:bg-gray-700 hover:shadow-lg inline-flex justify-center">
                    <div class="block sm:hidden">
                        <i class="fas fa-cloud-download-alt"></i>
                    </div>
                    <span class="sm:block hidden">Download CV</span>
                </a>
                <a href="#contact"
                    class="flex px-6 py-2 w-full sm:w-auto border-2 border-gray-700 text-gray-300 rounded-full font-medium transition-all hover:border-gray-600 hover:text-gray-200 hover:shadow-lg inline-flex justify-center">
                    <div class="block sm:hidden">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="sm:block hidden">Contact Me</span>
                </a>
            </div>

            <div class="flex space-x-6 text-xl">
                <a href="{{ $personalInfo->github ?? '#' }}" target="_blank"
                    class="text-gray-500 hover:text-gray-300 transition-colors"><i class="fab fa-github"></i></a>
                <a href="{{ $personalInfo->linkedin ?? '#' }}" target="_blank"
                    class="text-gray-500 hover:text-gray-300 transition-colors"><i class="fab fa-linkedin"></i></a>
                <a href="{{ $personalInfo->twitter ?? '#' }}" target="_blank"
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

    <section id="about" x-data="{ activeTab: 'experience' }" class="mb-20">
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
                @foreach ($experiences as $experience)
                    <div class="border-l-2 border-gray-600 pl-4 py-2">
                        <h3 class="text-xl font-medium">
                            {{ $experience->title }}
                        </h3>
                        <p class="text-gray-400 text-sm">
                            {{ $experience->company }} •
                            {{ Carbon\Carbon::parse($experience->start_date)->format('Y') }} -
                            {{ $experience->end_date ? Carbon\Carbon::parse($experience->end_date)->format('Y') : 'Present' }}
                        </p>
                        <p class="text-gray-300 mt-2 leading-relaxed">
                            {{ $experience->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="education" :class="activeTab === 'education' ? 'active' : ''" class="tab-content">
            <div class="space-y-6">
                @foreach ($educations as $education)
                    <div class="border-l-2 border-gray-600 pl-4 py-2">
                        <h3 class="text-xl font-medium">
                            {{ $education->title }}
                        </h3>
                        <p class="text-gray-400 text-sm">
                            {{ $education->institution }} •
                            {{ Carbon\Carbon::parse($education->start_date)->format('Y') }} -
                            {{ $education->end_date ? Carbon\Carbon::parse($education->end_date)->format('Y') : 'Present' }}
                        </p>
                        <p class="text-gray-300 mt-2 leading-relaxed">
                            {{ $education->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <section class="mb-20">
        <h2 class="text-2xl font-bold mb-8">Featured Projects</h2>

        <div class="grid gap-6">
            @foreach ($projects as $project)
                <div class="project-card bg-gray-900 rounded-xl p-6 border border-gray-800">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold">
                                {{ $project->title }}
                            </h3>
                        </div>
                        <div class="flex space-x-3">
                            @if ($project->github)
                                <a href="{{ $project->github }}" target="_blank"
                                    class="text-gray-500 hover:text-gray-300">
                                    <i class="fab fa-github"></i>
                                </a>
                            @endif

                            @if ($project->url)
                                <a href="{{ $project->url }}" target="_blank"
                                    class="text-gray-500 hover:text-gray-300">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4">
                        {{ $project->description }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        @foreach (explode(',', $project->tags) as $tag)
                            <span
                                class="px-3 py-1 bg-gray-800 rounded-full text-xs text-gray-300">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
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
                                    {{ $personalInfo->email ?? 'your@email' }}
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
                                    {{ $personalInfo->phone ?? '+977 984123456' }}
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
                                    {{ $personalInfo->address ?? 'Kathmandu, Nepal' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-800">
                        <h4 class="text-gray-300 mb-4">
                            Connect with me
                        </h4>
                        <div class="flex space-x-4">
                            <a href="{{ $personalInfo->github ?? '#' }}" target="_blank"
                                class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-gray-700 transition-colors">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="{{ $personalInfo->linkedin ?? '#' }}" target="_blank"
                                class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-gray-700 transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="{{ $personalInfo->twitter ?? '#' }}" target="_blank"
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
