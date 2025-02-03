@extends('components.main')

@section('content')
    <main class="overflow-hidden">

        <!-- Hero Section -->
        <section class="relative rounded-lg bg-gradient-to-r from-[#3B7CB8] to-[#276F98] text-white py-32">
            <div class="absolute inset-0 bg-[url({{ asset('asset/images/about-1.jpg') }})] opacity-10">
            </div>
            <div class="max-w-7xl mx-auto px-6 relative">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="text-left space-y-6">
                        <h1 class="text-5xl md:text-6xl font-bold leading-tight">Transform Your School Management</h1>
                        <p class="text-xl text-blue-100">Streamline operations, enhance communication, and elevate education
                            with our comprehensive school management platform.</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#demo"
                                class="px-8 py-4 bg-white text-[#276F98] font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                                Start Free Trial
                            </a>
                            <a href="#features"
                                class="px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300">
                                Explore Features
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block relative">
                        <img src="{{ asset('asset/images/about-1.jpg') }}" alt="School Management App Interface"
                            class="w-full max-w-md mx-auto transform hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Stats Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-blue-50 to-white border border-blue-100">
                        <div class="inline-block p-4 bg-blue-100 rounded-xl mb-4">
                            <span class="material-icons text-[#276F98] text-3xl">school</span>
                        </div>
                        <p class="text-4xl font-bold text-[#276F98] mb-2">500+</p>
                        <p class="text-gray-600">Schools Trust Us</p>
                    </div>
                    <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-blue-50 to-white border border-blue-100">
                        <div class="inline-block p-4 bg-blue-100 rounded-xl mb-4">
                            <span class="material-icons text-[#276F98] text-3xl">groups</span>
                        </div>
                        <p class="text-4xl font-bold text-[#276F98] mb-2">50K+</p>
                        <p class="text-gray-600">Active Users</p>
                    </div>
                    <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-blue-50 to-white border border-blue-100">
                        <div class="inline-block p-4 bg-blue-100 rounded-xl mb-4">
                            <span class="material-icons text-[#276F98] text-3xl">thumb_up</span>
                        </div>
                        <p class="text-4xl font-bold text-[#276F98] mb-2">98%</p>
                        <p class="text-gray-600">Satisfaction Rate</p>
                    </div>
                    <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-blue-50 to-white border border-blue-100">
                        <div class="inline-block p-4 bg-blue-100 rounded-xl mb-4">
                            <span class="material-icons text-[#276F98] text-3xl">support_agent</span>
                        </div>
                        <p class="text-4xl font-bold text-[#276F98] mb-2">24/7</p>
                        <p class="text-gray-600">Support Available</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Skoolbridge Section -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="order-2 md:order-1 relative">
                        <img src="{{ asset('asset/images/about.jpg') }}" alt="Skoolbridge"
                            class="w-full rounded-2xl shadow-lg relative z-10">
                        <!-- Floating Elements -->
                        <div class="absolute top-0 left-0 w-12 h-12 bg-blue-100/20 rounded-full animate-float"></div>
                        <div class="absolute bottom-0 right-0 w-8 h-8 bg-blue-200/20 rounded-full animate-float-delayed">
                        </div>
                    </div>
                    <div class="order-1 md:order-2">
                        <span class="inline-block px-4 py-2 bg-blue-100 text-[#276F98] rounded-full text-sm font-medium">
                            About Us
                        </span>
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">Shaping the Future of Education</h2>
                        <p class="text-xl text-gray-600 mb-8">Founded in 2025, Skoolbridge is committed to empowering
                            educational institutions with innovative technology, providing tools that help educators,
                            students, and parents collaborate seamlessly.</p>
                        <div class="grid grid-cols-2 gap-8">
                            <div class="flex items-start gap-4">
                                <span class="material-icons text-[#276F98]">school</span>
                                <div>
                                    <h4 class="font-semibold text-gray-900">500+ Schools</h4>
                                    <p class="text-gray-600 mt-1">Trusted by institutions globally to enhance educational
                                        experiences</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <span class="material-icons text-[#276F98]">groups</span>
                                <div>
                                    <h4 class="font-semibold text-gray-900">1M+ Users</h4>
                                    <p class="text-gray-600 mt-1">Empowering educators and students through our platform</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <span class="material-icons text-[#276F98]">public</span>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Global Reach</h4>
                                    <p class="text-gray-600 mt-1">Expanding across 50+ countries, connecting educators
                                        worldwide</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <span class="material-icons text-[#276F98]">military_tech</span>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Award-Winning Platform</h4>
                                    <p class="text-gray-600 mt-1">Recognized in the industry for innovation in education
                                        technology</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Features Section -->
        <section id="features" class="py-24 bg-gradient-to-b from-gray-50 to-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-[#276F98] rounded-full text-sm font-medium mb-4">
                        Features
                    </span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Comprehensive School Management Solution</h2>
                    <p class="text-xl text-gray-600">Everything you need to run your educational institution efficiently
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Feature Cards with Hover Effects -->
                    <div
                        class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-icons text-[#276F98] text-2xl">school</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Smart Attendance</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">Automated attendance tracking with real-time
                            notifications to parents and detailed analytics for administration.</p>
                        <a href="#" class="inline-flex items-center text-[#276F98] hover:gap-2 transition-all">
                            Learn More <span class="material-icons text-sm ml-1">arrow_forward</span>
                        </a>
                    </div>

                    <div
                        class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-icons text-[#276F98] text-2xl">schedule</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Timetable</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">Effortlessly manage and view your academic timetable
                            with easy navigation and customizable schedules.</p>
                        <a href="#" class="inline-flex items-center text-[#276F98] hover:gap-2 transition-all">
                            Learn More <span class="material-icons text-sm ml-1">arrow_forward</span>
                        </a>
                    </div>


                    <div
                        class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-icons text-[#276F98] text-2xl">payments</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Fee Management</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">Streamlined fee collection with multiple payment
                            options and automated reminders for pending dues.</p>
                        <a href="#" class="inline-flex items-center text-[#276F98] hover:gap-2 transition-all">
                            Learn More <span class="material-icons text-sm ml-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Additional Features Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">

                    <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl">
                        <span class="material-icons text-[#276F98]">assessment</span>
                        <div>
                            <h4 class="font-semibold text-gray-900">Result Management</h4>
                            <p class="text-gray-600 mt-1">View and analyze student results with detailed performance
                                reports</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl">
                        <span class="material-icons text-[#276F98]">person</span>
                        <div>
                            <h4 class="font-semibold text-gray-900">Profile Management</h4>
                            <p class="text-gray-600 mt-1">Manage student profiles and personal details</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl">
                        <span class="material-icons text-[#276F98]">notifications</span>
                        <div>
                            <h4 class="font-semibold text-gray-900">Notifications</h4>
                            <p class="text-gray-600 mt-1">Stay updated with important announcements</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold mb-8">Frequently Asked Questions</h2>

                <div class="max-w-3xl mx-auto text-left">
                    <!-- FAQ Item 1 -->
                    <div class="mb-4">
                        <button
                            class="flex justify-between items-center w-full bg-gray-100 p-6 rounded-lg hover:bg-gray-200 transition-all duration-300"
                            onclick="toggleAccordion('faq1')">
                            <h3 class="font-bold">How do I sign up?</h3>
                            <svg class="w-6 h-6 transition-transform duration-300" id="icon1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="overflow-hidden max-h-0 transition-all duration-300" id="faq1">
                            <div class="p-6 bg-white border border-t-0 rounded-b-lg">
                                <p class="text-gray-700">You can sign up by clicking the 'Get Started' button on the
                                    homepage.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="mb-4">
                        <button
                            class="flex justify-between items-center w-full bg-gray-100 p-6 rounded-lg hover:bg-gray-200 transition-all duration-300"
                            onclick="toggleAccordion('faq2')">
                            <h3 class="font-bold">Is there a free trial?</h3>
                            <svg class="w-6 h-6 transition-transform duration-300" id="icon2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="overflow-hidden max-h-0 transition-all duration-300" id="faq2">
                            <div class="p-6 bg-white border border-t-0 rounded-b-lg">
                                <p class="text-gray-700">Yes, we offer a 14-day free trial with full access to all
                                    features.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="mb-4">
                        <button
                            class="flex justify-between items-center w-full bg-gray-100 p-6 rounded-lg hover:bg-gray-200 transition-all duration-300"
                            onclick="toggleAccordion('faq3')">
                            <h3 class="font-bold">What payment methods do you accept?</h3>
                            <svg class="w-6 h-6 transition-transform duration-300" id="icon3" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="overflow-hidden max-h-0 transition-all duration-300" id="faq3">
                            <div class="p-6 bg-white border border-t-0 rounded-b-lg">
                                <p class="text-gray-700">We accept all major credit cards (Visa, MasterCard, American
                                    Express) and PayPal.</p>
                            </div>
                        </div>
                    </div>

                    <!-- School App FAQ Item 4 -->
                    <div class="mb-4">
                        <button
                            class="flex justify-between items-center w-full bg-gray-100 p-6 rounded-lg hover:bg-gray-200 transition-all duration-300"
                            onclick="toggleAccordion('faq4')">
                            <h3 class="font-bold">How can teachers manage student attendance?</h3>
                            <svg class="w-6 h-6 transition-transform duration-300" id="icon4" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="overflow-hidden max-h-0 transition-all duration-300" id="faq4">
                            <div class="p-6 bg-white border border-t-0 rounded-b-lg">
                                <p class="text-gray-700">Teachers can easily mark and track student attendance using our
                                    app’s integrated attendance feature with calendar-based tracking.</p>
                            </div>
                        </div>
                    </div>

                    <!-- School App FAQ Item 5 -->
                    <div class="mb-4">
                        <button
                            class="flex justify-between items-center w-full bg-gray-100 p-6 rounded-lg hover:bg-gray-200 transition-all duration-300"
                            onclick="toggleAccordion('faq5')">
                            <h3 class="font-bold">Can parents track their child's academic progress?</h3>
                            <svg class="w-6 h-6 transition-transform duration-300" id="icon5" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="overflow-hidden max-h-0 transition-all duration-300" id="faq5">
                            <div class="p-6 bg-white border border-t-0 rounded-b-lg">
                                <p class="text-gray-700">Yes, parents can monitor their child's progress, attendance,
                                    assignments, and communication with teachers through the parent dashboard.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </section>

        <!-- Interactive Demo Section -->
        <section class="py-16 text-center">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-4">See Our Platform in Action</h2>
                <p class="text-gray-700 mb-4">Watch a quick demo of how our system works.</p>
                <video class="w-full max-w-4xl mx-auto rounded-lg shadow-lg" controls>
                    <source src="demo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>

        <!-- Pricing Plans Section -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-gray-100">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Choose Your Plan</h2>
            <p class="text-lg text-gray-600">Select the perfect plan for your needs. Simple, transparent pricing.</p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Basic Plan -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Basic</h3>
                        <div class="text-gray-600 mb-6">Perfect for starters</div>
                        <div class="flex items-center justify-center">
                            <span class="text-4xl font-bold text-gray-900">₹829</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Access to core features
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Basic support
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            1 GB storage
                        </li>
                    </ul>
                </div>
                <div class="px-8 pb-8">
                    <button class="w-full bg-gray-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors duration-300">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Standard Plan (Popular) -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden relative transform md:scale-105 border-2 border-blue-500">
                <div class="absolute top-0 right-0 bg-[#276F98] text-white px-4 py-1 rounded-bl-lg text-sm font-semibold">
                    POPULAR
                </div>
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Standard</h3>
                        <div class="text-gray-600 mb-6">Best for professionals</div>
                        <div class="flex items-center justify-center">
                            <span class="text-4xl font-bold text-gray-900">₹1,665</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Everything in Basic
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Priority support
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            10 GB storage
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Custom integrations
                        </li>
                    </ul>
                </div>
                <div class="px-8 pb-8">
                    <button class="w-full bg-[#276F98] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#3B7CB8] transition-colors duration-300">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Premium</h3>
                        <div class="text-gray-600 mb-6">For power users</div>
                        <div class="flex items-center justify-center">
                            <span class="text-4xl font-bold text-gray-900">₹2,495</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Everything in Standard
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Advanced analytics
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Unlimited storage
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#276F98] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            24/7 phone support
                        </li>
                    </ul>
                </div>
                <div class="px-8 pb-8">
                    <button class="w-full bg-gray-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors duration-300">
                        Get Started
                    </button>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-12 text-gray-600">
            <p>All plans include a 14-day free trial. No credit card required.</p>
        </div>
    </div>
</section>


        <!-- CTA Section -->
        <section id="demo" class="py-24 rounded-lg bg-[#276F98]">
            <div class="max-w-4xl mx-auto px-6 text-center text-white">
                <h2 class="text-4xl font-bold">Ready to Transform Your School?</h2>
                <p class="mt-4 text-xl text-blue-100">Experience how our platform can revolutionize your school management
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#"
                        class="px-8 py-4 bg-white text-[#276F98] font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 book-btn">
                        Schedule Demo
                    </a>
                    <a href="tel:+918089629420"
                        class="px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300">
                        Call Us Now
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900">Get in Touch with Skoolbridge</h2>
                        <p class="mt-4 text-xl text-gray-600">Have questions? Our team at Skoolbridge is here to help you.
                        </p>
                        <div class="mt-8 space-y-6">
                            <div class="flex items-center gap-4">
                                <span class="material-icons text-[#276F98]">phone</span>
                                <p class="text-lg text-gray-700">+91 1234 567890</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="material-icons text-[#276F98]">email</span>
                                <p class="text-lg text-gray-700">info@skoolbridge.com</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="material-icons text-[#276F98]">location_on</span>
                                <p class="text-lg text-gray-700">Agra, India</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <form method="POST" action="{{ url('/contact') }}" class="space-y-6">
                            @csrf
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" name="name"
                                    class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#276F98] focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email" name="email"
                                    class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Mobile Number</label>
                                <input type="tel" name="phone"
                                    class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea name="message" rows="4"
                                    class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    required></textarea>
                            </div>
                            <button type="submit"
                                class="w-full px-8 py-4 bg-[#276F98] text-white font-semibold rounded-lg shadow-lg hover:bg-[#174158] transition-all duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trusted By Section -->
        <section class="py-12 bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-6">
                <p class="text-center text-gray-600 font-medium mb-8">Trusted by leading educational institutions</p>
                <div class="flex flex-wrap justify-center items-center gap-12 opacity-60">
                    <img src="{{ asset('asset/images/gettyimages-820882982-1024x1024.jpg') }}" alt="School 1"
                        class="h-12 grayscale hover:grayscale-0 transition-all">
                    <img src="{{ asset('asset/images/gettyimages-820882982-1024x1024.jpg') }}" alt="School 2"
                        class="h-12 grayscale hover:grayscale-0 transition-all">
                    <img src="{{ asset('asset/images/gettyimages-820882982-1024x1024.jpg') }}" alt="School 3"
                        class="h-12 grayscale hover:grayscale-0 transition-all">
                    <img src="{{ asset('asset/images/gettyimages-820882982-1024x1024.jpg') }}" alt="School 4"
                        class="h-12 grayscale hover:grayscale-0 transition-all">
                </div>
            </div>
        </section>

    </main>


    <!-- JavaScript for accordion functionality -->
    <script>
        function toggleAccordion(id) {
            const content = document.getElementById(id);
            const icon = document.getElementById('icon' + id.slice(-1));
            const allContents = document.querySelectorAll('[id^="faq"]');
            const allIcons = document.querySelectorAll('[id^="icon"]');

            // Close all other accordion items
            allContents.forEach(item => {
                if (item.id !== id) {
                    item.style.maxHeight = '0px';
                }
            });

            // Reset all icons
            allIcons.forEach(item => {
                if (item.id !== 'icon' + id.slice(-1)) {
                    item.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current accordion item
            if (content.style.maxHeight !== '0px' && content.style.maxHeight) {
                content.style.maxHeight = '0px';
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        }
    </script>
@endsection
